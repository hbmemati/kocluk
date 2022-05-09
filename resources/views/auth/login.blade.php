@extends('auth.app')
@section('title')
    Giriş Yap
@endsection

@section('content')

    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{route('login')}}">
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Sisteme Giriş Yap</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">Yeni misin ?
                <a href="{{route('register.index')}}" class="link-primary fw-bolder">Yeni üyelik Oluştur</a></div>
            <!--end::Link-->
        </div>
        @csrf
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0">Şifre</label>
                <!--end::Label-->

            </div>
            <!--end::Wrapper-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" id="kt_sign_in_submit2" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Giriş Yap</span>
                <span class="indicator-progress">Lütfen Bekleyin...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Submit button-->

        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
@endsection

@section('scripts')
    <script src="{{asset('assets/js/custom/authentication/sign-in/general.js')}}"></script>
@endsection
