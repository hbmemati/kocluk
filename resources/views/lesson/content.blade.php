@extends('app')
@section('title')
    Kurs - {{ $lesson->name }}
@endsection

@section('content')
    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
        <!--begin::Messenger-->
        <div class="card" id="kt_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header" id="kt_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover">

                        @foreach($lesson->students as $student)
                            @if($loop->index < 8)
                                @if($student->image != null)
                                    <a href="#" class="symbol symbol-35px me-2"
                                       data-bs-toggle="tooltip" title=""
                                       data-bs-original-title="{{$student->name}} {{$student->surname}}">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="{{$student->name}} {{$student->surname}}" src="{{$student->image}}"/>
                                        </div>
                                    </a>
                                @else
                                    <a href="#" class="symbol symbol-35px me-2"
                                       data-bs-toggle="tooltip" title=""
                                       data-bs-original-title="{{$student->name}} {{$student->surname}}">
                                        <div class="symbol symbol-35px symbol-circle">
                                    <span
                                        class="symbol-label bg-light-danger text-danger 40px">{{$student->name[0]}}</span>
                                        </div>
                                    </a>
                                @endif
                            @endif
                        @endforeach
                        <!--end::Avatar-->
                        <!--begin::All users-->

                        @if($user->type->id == 1|| $user->type->id == 2)
                            @if($lesson->students->count() > 8)
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                   data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label fs-8 fw-bolder" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                  title="Diğer kullanıcıları gör">+{{$lesson->students->count()-8}}</span>
                                </a>
                            @endif

                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label fs-8 fw-bolder" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                  title="Diğer kullanıcıları gör">@</span>
                            </a>

                        @endif
                        <!--end::All users-->
                    </div>
                    <!--end::Users-->
                </div>
                <!--end::Title-->

            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body" id="kt_chat_messenger_body">
                <!--begin::Messages-->
                <div style="max-height: 400px;" class="scroll-y me-n5 pe-5 h-300px h-lg-auto">

                    @foreach($contents as $message)
                        <!--begin::Message(in)-->
                        <div
                            class="d-flex @if($message->user_id == $user->id) justify-content-end @else justify-content-start @endif mb-10">
                            <!--begin::Wrapper-->
                            <div
                                class="d-flex flex-column @if($message->user_id == $user->id) align-items-end @else align-items-start @endif">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar-->
                                    {{--                                <div class="symbol symbol-35px symbol-circle">--}}
                                    {{--                                    <img alt="Pic" src=""/>--}}
                                    {{--                                </div>--}}

                                    @if($message->user->image != null)
                                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title=""
                                           data-bs-original-title="{{$message->user->name}} {{$message->user->surname}}">
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="{{$message->user->name}} {{$message->user->surname}}"
                                                     src="{{$message->user->image}}"/>
                                            </div>
                                        </a>
                                    @else
                                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title=""
                                           data-bs-original-title="{{$message->user->name}} {{$message->user->surname}}">
                                            <div class="symbol symbol-35px symbol-circle">
                                    <span
                                        class="symbol-label bg-light-danger text-danger 40px">{{$message->user->name[0]}}</span>
                                            </div>
                                        </a>
                                    @endif

                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#"
                                           class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">@if($message->user_id == $user->id)
                                                Siz
                                            @else
                                                {{$message->user->name}} {{$message->user->surname}}
                                            @endif</a>
                                        <span
                                            class="text-muted fs-7 mb-1">{{\Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                     data-kt-element="message-text">

                                    {!! str_replace(  '<h1>&nbsp;</h1>', '' ,$message->content)!!}
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    @endforeach
                    <!--end::Message(in)-->

                    <!--end::Message(in)-->
                    <!--begin::Message(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/assets/media/avatars/300-1.jpg"/>
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                 data-kt-element="message-text"></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->
                    <!--begin::Message(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/assets/media/avatars/300-25.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                 data-kt-element="message-text">Right before vacation season we have the next Big Deal
                                for you.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->

            <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                <!--begin::Input-->
                <form action="{{route('lesson.content.add', ['slug'=>$lesson->slug])}}" method="post">
                    @csrf
                    <input type="text" value="{{$lesson->id}}" name="lesson_id" hidden>
                    <div class="row">
                        <div class="col-10">
                             <textarea name="content" id="editor">

                    </textarea>
                        </div>
                        <div class="col-2">
                            <div class="emojiPicker">
                                <div class="row">
                                    <div class="col-2"><span class="emoji">&#128540;</span></div>
                                    <div class="col-2"><span class="emoji">&#128513;</span></div>
                                    <div class="col-2"><span class="emoji">&#128514;</span></div>
                                    <div class="col-2"><span class="emoji">&#128515;</span></div>
                                    <div class="col-2"><span class="emoji">&#128516;</span></div>
                                    <div class="col-2"><span class="emoji">&#128517;</span></div>
                                    <div class="col-2"><span class="emoji">&#128518;</span></div>
                                    <div class="col-2"><span class="emoji">&#128519;</span></div>
                                    <div class="col-2"><span class="emoji">&#128521;</span></div>
                                    <div class="col-2"><span class="emoji">&#128522;</span></div>
                                    <div class="col-2"><span class="emoji">&#128523;</span></div>
                                    <div class="col-2"><span class="emoji">&#128524;</span></div>
                                    <div class="col-2"><span class="emoji">&#128525;</span></div>
                                    <div class="col-2"><span class="emoji">&#128526;</span></div>
                                    <div class="col-2"><span class="emoji">&#128527;</span></div>
                                    <div class="col-2"><span class="emoji">&#128528;</span></div>
                                    <div class="col-2"><span class="emoji">&#128529;</span></div>
                                    <div class="col-2"><span class="emoji">&#128530;</span></div>
                                    <div class="col-2"><span class="emoji">&#128531;</span></div>
                                    <div class="col-2"><span class="emoji">&#128532;</span></div>
                                    <div class="col-2"><span class="emoji">&#128533;</span></div>
                                    <div class="col-2"><span class="emoji">&#128534;</span></div>
                                    <div class="col-2"><span class="emoji">&#128535;</span></div>
                                    <div class="col-2"><span class="emoji">&#128536;</span></div>
                                    <div class="col-2"><span class="emoji">&#128537;</span></div>
                                    <div class="col-2"><span class="emoji">&#128538;</span></div>
                                    <div class="col-2"><span class="emoji">&#128539;</span></div>
                                    <div class="col-2"><span class="emoji">&#128546;</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--begin:Toolbar-->
                    <div class="d-flex flex-stack">
                        <!--begin::Send-->
                        <button class="btn btn-primary mt-3" type="submit" data-kt-element="editor">Gönder</button>
                        <!--end::Send-->
                    </div>
                </form>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>



    <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                                  rx="1" transform="rotate(-45 6 17.3137)"
                                                                  fill="black"/>
															<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                  transform="rotate(45 7.41422 6)" fill="black"/>
														</svg>
													</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Kurs Kullanıcıları</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-bold fs-5">Kullanıcıları Aktif - Pasif Yapabilirsiniz

                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Users-->
                    <div class="mb-15">
                        <!--begin::List-->
                        <div class="mh-375px scroll-y me-n7 pe-7">


                            @foreach($lesson->allstudents as $student)
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->

                                        @if($student->image != null)
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{$student->image}}"/>
                                            </div>
                                        @else

                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-bold">{{$student->name[0]}}</span>
                                            </div>
                                        @endif
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                               class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">
                                                {{$student->name}} {{$student->surname}}
                                            </a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">{{$student->email}}</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div
                                                class="form-check form-switch form-check-custom form-check-solid me-10">
                                                <input data-lesson-id="{{$lesson->id}}" data-user-id="{{$student->id}}"
                                                       class="form-check-input h-20px w-30px" type="checkbox"
                                                       @if($student->status) checked="checked" @endif value=""
                                                       id="flexSwitch20x30"/>
                                                <label class="form-check-label" for="flexSwitch20x30">
                                                    Durum
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                            @endforeach



                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Notice-->
                    <div class="d-flex justify-content-between">
                        <!--begin::Label-->
                        <div class="fw-bold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
@endsection


@section('js')

    <script src="{{asset('assets/ckeditor/build/ckeditor.js')}}"></script>
    <script>
        var edit;
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{route('image.upload2', ['_token' => csrf_token() ])}}",
                },

            })
            .then(editor => {
                console.log(editor);
                edit = editor;
            })
            .catch(error => {
                console.error(error);
            });


    </script>

    <script>
        $('.emoji').click(function () {
            var emoji = $(this).text();
            edit.setData(edit.getData() + emoji);
        });
    </script>

    <script>
        $('.form-check-input').change(function () {

            var user_id = $(this).attr('data-user-id');
            var status = $(this).is(':checked');
            $.ajax({
                url: '{{route('lesson.status',['slug'=>$lesson->slug])}}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    lesson_id: {{$lesson->id}},
                    user_id: user_id,
                    status: status
                },
                success: function (data) {
                    console.log(data);
                }

            });


        });
    </script>
@endsection

@section('head')
    <style>
        h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 600;
            line-height: 1.2;
            color: #181C32;
        }

        .emoji {
            cursor: pointer;
        }
    </style>

    <link rel="stylesheet" href="{{asset('assets/ckeditor/sample/styles.css')}}">
@endsection
