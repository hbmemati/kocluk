@extends('auth.app')
@section('title')
    Kayıt Ol
@endsection

@section('content')

    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="post" action="{{route('register')}}">
        <!--begin::Heading-->
        <div class="mb-10 text-center">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Yeni üyelik Oluştur</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">Zaten üye Misin?
                <a href="{{route('login.index')}}" class="link-primary fw-bolder">Giriş Yap</a></div>
            <!--end::Link-->
        </div>
        <!--end::Heading-->


        <!--begin::Input group-->
        <div class="row fv-row mb-7">
            <!--begin::Col-->
            <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">Ad</label>
                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="name" autocomplete="off" />
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">Soyad</label>
                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="surname" autocomplete="off" />
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Email</label>
            <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-10 fv-row" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6">Şifre</label>
                <!--end::Label-->
                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="bi bi-eye-slash fs-2"></i>
											<i class="bi bi-eye fs-2 d-none"></i>
										</span>
                </div>
                <!--end::Input wrapper-->
                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
                <!--end::Meter-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Hint-->
            <div class="text-muted">Harf, sayı ve simge karışımıyla 8 veya daha fazla karakter kullanın.</div>
            <!--end::Hint-->
        </div>
        <!--end::Input group=-->
        <!--begin::Input group-->
        <div class="fv-row mb-5">
            <label class="form-label fw-bolder text-dark fs-6">Şifre Onayla</label>
            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_confirmation" autocomplete="off" />
        </div>

        <div class="fv-row mb-5">
            <label class="form-label fw-bolder text-dark fs-6">Tür</label>
            <div class="form-check form-check-custom form-check-solid form-check-sm">
                <input class="form-check-input" name="type" type="checkbox" value="" id="flexRadioLg"/>
                <label class="form-check-label" for="flexRadioLg">
                    Eğitimci (Onay Gerektirir)
                </label>
            </div>
        </div>


@csrf

        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-check form-check-custom form-check-solid form-check-inline">
                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                <span class="form-check-label fw-bold text-gray-700 fs-6">Kabul Ediyorum
									<a href="#" class="ms-1 link-primary">Koşullar ve şartlar</a>.</span>
            </label>
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <button type="submit" id="signup" class="btn btn-lg btn-primary">
                <span class="indicator-label">Kayıt Yap</span>

            </button>
        </div>
        <!--end::Actions-->
    </form>

@endsection

@section('scripts')
    <script src="{{asset('assets/js/custom/authentication/sign-up/general.js')}}"></script>
@endsection
