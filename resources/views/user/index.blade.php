@extends('app')
@section('title')
    Kullanıcı Ayarları
@endsection

@section('content')

    <div class="card card-docs mb-2">
        <!--begin::Card Body-->
        <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
            <!--begin::Section-->

            <!--end::Section-->
            <!--begin::Section-->
            <div class="py-10">
                <!--begin::Heading-->
                <h1 class="anchor fw-bolder mb-5" id="custom-form-control">
                    Profil</h1>
                <!--end::Heading-->
                <!--begin::Block-->

                <!--end::Block-->
                <!--begin::Block-->

                <form action="{{route('user.update')}}" method="post">
                    @csrf
                    <div class="py-5">
                        <div class="rounded border p-10">
                            <div class="mb-10">
                                <label class="form-label">Ad</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-10">
                                <label class="form-label">Soyad</label>
                                <input type="text" name="surname" value="{{$user->surname}}" class="form-control" placeholder="Surname">
                            </div>

                            <div class="mb-10">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="name@example.com">
                            </div>

                            <div class="mb-10">
                                <label for="image" class="form-label">Profil Fotoğrafı</label>
                                <br>
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                     style="background-image: url({{asset('admin/assets/media/avatars/blank.png')}})">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-150px h-150px"
                                         style="background-image: url(@if($user->image ==null) assets/media/avatars/300-1.jpg @else {{$user->image}} @endif "></div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                        data-kt-image-input-action="change"
                                        data-bs-toggle="tooltip"
                                        data-bs-dismiss="click"
                                        title="Profil Fotoğrafı Değiştir">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" id="image" name="image" url="{{$user->image}}"
                                               accept=".png, .jpg, .jpeg"/>
                                        <input type="hidden" name="avatar_remove"/>
                                        <input type="hidden" value="{{$user->image}}" name="avatar"/>
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                        data-kt-image-input-action="cancel"
                                        data-bs-toggle="tooltip"
                                        data-bs-dismiss="click"
                                        title="Profil Fotoğrafı İptal ">
         <i class="bi bi-x fs-2"></i>
     </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    {{--        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"--}}
                                    {{--              data-kt-image-input-action="remove"--}}
                                    {{--              data-bs-toggle="tooltip"--}}
                                    {{--              data-bs-dismiss="click"--}}
                                    {{--              title="{{$placeholder}} Sil">--}}
                                    {{--         <i class="bi bi-x fs-2"></i>--}}
                                    {{--     </span>--}}
                                    <!--end::Remove button-->
                                </div>

                                <div class="text-center pt-15">

                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Kaydet</span>
                                    </button>
                                </div>
                                <!--end::Image input-->
                            </div>


                            <!--end::Code-->
                        </div>
                    </div>
                </form>

                <!--end::Block-->
            </div>
            <!--end::Section-->
            <!--begin::Section-->

            <!--end::Section-->
            <!--begin::Section-->

            <!--end::Section-->
        </div>
        <!--end::Card Body-->
    </div>
@endsection


@section('js')
    <script>
        $(document).ready(function () {
            $('#select').select2();
        });


    </script>


    <script>
        $(document).on('change', 'input[type="file"]', function (e) {
            let id = e.target.name;
            up_image(id);
        });


        function up_image(id) {
            var formData = new FormData();
            formData.append('upload', $('input[name="' + id + '"]')[0].files[0]);
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
            $.ajax({
                type: 'POST',
                url: '{{route('image.upload')}}',
                data: formData,
                cache: false,
                processData: false, // Tell jQuery Do not deal with the data sent
                contentType: false,
                success: function (data) {
                    console.log("success");
                    $('input[name="' + id + '"]').attr('url', data.url);
                    $('input[name="avatar"]').attr('value', data.url);
                    $('input[name="' + id + '"]').parent().parent().children('.image-input-wrapper').css("background-image", "url(" + data.url + ")");
                    console.log(data);
                },
                error: function (data) {
                    console.log("error");
                    console.log(data);
                }
            });
        }
    </script>


@endsection
