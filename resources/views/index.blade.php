@extends('app')
@section('title')
    Anasayfa
@endsection

@section('content')
    <div class="row g-5 g-xl-8">
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                    <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect x="8" y="9" width="3" height="10" rx="1.5"
                                                              fill="black"></rect>
														<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                                              fill="black"></rect>
														<rect x="18" y="11" width="3" height="8" rx="1.5"
                                                              fill="black"></rect>
														<rect x="3" y="13" width="3" height="6" rx="1.5"
                                                              fill="black"></rect>
													</svg>
												</span>
                    <!--end::Svg Icon-->
                    <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">500</div>
                    <div class="fw-bold text-gray-400">Gün İçi Ziyaret</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                    <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
                                                              d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                              fill="black"></path>
														<path
                                                            d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                            fill="black"></path>
														<path
                                                            d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                            fill="black"></path>
													</svg>
												</span>
                    <!--end::Svg Icon-->
                    <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">+3000</div>
                    <div class="fw-bold text-gray-100">Yeni Kullanıcılar</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
                                                              d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                              fill="black"></path>
														<path
                                                            d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                            fill="black"></path>
													</svg>
												</span>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bolder fs-2 mb-2 mt-5">50</div>
                    <div class="fw-bold text-white">Kurs</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
                                                              d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z"
                                                              fill="black"></path>
														<path
                                                            d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z"
                                                            fill="black"></path>
													</svg>
												</span>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bolder fs-2 mb-2 mt-5">50</div>
                    <div class="fw-bold text-white">Kursların Doluluk Oranı</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
    </div>

    <div class="d-flex flex-wrap flex-stack mb-6">
        <!--begin::Title-->
        <h3 class="fw-bolder my-2">Kurslar
            <span class="fs-6 fw-bold ms-1">({{count($lessons)}})</span></h3>
        <!--end::Title-->
        <!--begin::Controls-->
        <div class="d-flex my-2">
            <!--begin::Select-->
            <select name="status" data-control="select2" data-hide-search="true"
                    class="form-select form-select-sm border-body bg-body w-125px">
                <option value="Online" selected="selected">Hepsi</option>
                <option value="Pending">Sahip Olduğum</option>
                @foreach($categories as $category)
                    <option value="{{$category->name}}">{{$category->name}}</option>
                @endforeach
            </select>            <!--end::Select-->
        </div>
        <!--end::Controls-->
    </div>

    <div class="row g-5 g-xl-8">


    @foreach($lessons as $lesson)

        <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Mixed Widget 8-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack">
                            <!--begin:Info-->
                            <div class="d-flex align-items-center">
                                <!--begin:Image-->
                                <div class="symbol symbol-60px me-5">
															<span class="symbol-label bg-success-light">
																<img src="{{$lesson->image}}"
                                                                     class="h-50 align-self-center" alt="">
															</span>
                                </div>
                                <!--end:Image-->
                                <!--begin:Title-->
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-5">
                                        {{$lesson->name }}
                                    </a>
                                    <span class="text-muted fw-bold">Oluşturma : {{$lesson->created_at->format('d/m/Y')}}</span>
                                </div>
                                <!--end:Title-->


                            </div>
                            <!--begin:Info-->
                            <!--begin:Menu-->
                            <div class="ms-1">

                                @if(in_array($lesson->id, $user_lessons))
                                <a href="{{route('lesson.content',['slug' =>$lesson->slug])}}" class="btn btn-sm btn-light-primary fw-bolder" >Kursa Git</a>
                                @elseif(in_array($lesson->id, $user_lessons2))
                                    <a href="{{route('lesson.content.unfollow', ['slug' =>$lesson->slug, 'lesson_id'=>$lesson->id])}}" class="btn btn-sm btn-light-primary fw-bolder">Geri Çek</a>
                                @else
                                    <a href="{{route('lesson.content.follow', ['slug' =>$lesson->slug, 'lesson_id'=>$lesson->id])}}" class="btn btn-sm btn-light-primary fw-bolder">Başvur</a>
                                @endif
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Heading-->
                        <!--begin:Stats-->
                        <div class="d-flex flex-column w-100 mt-12">
                            <span class="text-dark me-2 fw-bolder pb-3">Açıklama</span>
                            <span class="text-muted fw-bold">{{$lesson->description}}</span>
                        </div>

                        <div class="d-flex flex-column w-100 mt-12">
                            <span class="text-dark me-2 fw-bolder pb-3">Kategori</span>
                            <span class="text-muted fw-bold">{{$lesson->category->name}}</span>
                        </div>

                        <div class="d-flex flex-column w-100 mt-12">
                            <span class="text-dark me-2 fw-bolder pb-3">Doluluk</span>
                            <div class="progress h-5px w-100">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                     aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <!--end:Stats-->
                        <!--begin:Team-->

                        <div class="d-flex flex-column mt-10">
                            <div class="text-dark me-2 fw-bolder pb-4">Eğitimciler</div>
                            <div class="d-flex">
                                @foreach($lesson->teachers as $teacher)
                                    @if($teacher->image != null)
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title=""
                                   data-bs-original-title="Ana Stone">
                                    <img src="{{$teacher->image}}" alt="">
                                </a>
                                    @else
                                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title=""
                                           data-bs-original-title="{{$teacher->name}} {{$teacher->surname}}">
                                        <div class="symbol symbol-50px">
                                            <div class="symbol symbol-45px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fs-2hx fw-bolder">{{$teacher->name[0]}}</span>
                                            </div>
                                        </div>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        <!--end:Team-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 8-->
            </div>
            <!--end::Col-->
        @endforeach
    </div>

@endsection


@section('js')
    <script>
        $(document).ready(function () {
            $('#select').select2();
        });


    </script>
@endsection
