@extends('app')
@section('title')
    Kurslarım
@endsection

@section('content')
    <!--end::Pricing-->
    <!--begin::Payment method-->
    <div class="card card-flush pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2 class="fw-bolder">Kurslarım</h2>
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <a href="#" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Yeni
                    Kurs Ekle</a>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Options-->
            <div id="kt_create_new_payment_method">
                <!--begin::Option-->
                <div class="py-1">
                    <!--begin::Header-->
                    <div class="py-3 d-flex flex-stack flex-wrap">
                        <!--begin::Toggle-->
                        <div class="d-flex align-items-center collapsible toggle" data-bs-toggle="collapse"
                             data-bs-target="#kt_create_new_payment_method_1">
                            <!--begin::Arrow-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="5"
                                                                                      fill="black"/>
																				<rect x="6.0104" y="10.9247" width="12"
                                                                                      height="2" rx="1" fill="black"/>
																			</svg>
																		</span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="5"
                                                                                      fill="black"/>
																				<rect x="10.8891" y="17.8033" width="12"
                                                                                      height="2" rx="1"
                                                                                      transform="rotate(-90 10.8891 17.8033)"
                                                                                      fill="black"/>
																				<rect x="6.01041" y="10.9247" width="12"
                                                                                      height="2" rx="1" fill="black"/>
																			</svg>
																		</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Arrow-->
                            <!--begin::Logo-->
                            <img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt=""/>
                            <!--end::Logo-->
                            <!--begin::Summary-->
                            <div class="me-3">
                                <div class="d-flex align-items-center fw-bolder">Mastercard
                                    <div class="badge badge-light-primary ms-5">Primary</div>
                                </div>
                                <div class="text-muted">Expires Dec 2024</div>
                            </div>
                            <!--end::Summary-->
                        </div>
                        <!--end::Toggle-->
                        <!--begin::Input-->
                        <div class="d-flex my-3 ms-9">
                            <!--begin::Radio-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="radio" name="payment_method" checked="checked"/>
                            </label>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div id="kt_create_new_payment_method_1" class="collapse show fs-6 ps-10">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap py-5">
                            <!--begin::Col-->
                            <div class="flex-equal me-5">
                                <table class="table table-flush fw-bold gy-1">
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Name</td>
                                        <td class="text-gray-800">Emma Smith</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Number</td>
                                        <td class="text-gray-800">**** 3291</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Expires</td>
                                        <td class="text-gray-800">12/2024</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Type</td>
                                        <td class="text-gray-800">Mastercard credit card</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Issuer</td>
                                        <td class="text-gray-800">VICBANK</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">ID</td>
                                        <td class="text-gray-800">id_4325df90sdf8</td>
                                    </tr>
                                </table>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="flex-equal">
                                <table class="table table-flush fw-bold gy-1">
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Billing address</td>
                                        <td class="text-gray-800">AU</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Phone</td>
                                        <td class="text-gray-800">No phone provided</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Email</td>
                                        <td class="text-gray-800">
                                            <a href="#" class="text-gray-900 text-hover-primary">e.smith@kpmg.com.au</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Origin</td>
                                        <td class="text-gray-800">Australia
                                            <div class="symbol symbol-20px symbol-circle ms-2">
                                                <img src="assets/media/flags/australia.svg"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">CVC check</td>
                                        <td class="text-gray-800">Passed
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-success">
																					<svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.3" x="2" y="2"
                                                                                              width="20" height="20"
                                                                                              rx="10" fill="black"/>
																						<path
                                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                            fill="black"/>
																					</svg>
																				</span>
                                            <!--end::Svg Icon--></td>
                                    </tr>
                                </table>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Option-->
                <div class="separator separator-dashed"></div>
                <!--begin::Option-->
                <div class="py-1">
                    <!--begin::Header-->
                    <div class="py-3 d-flex flex-stack flex-wrap">
                        <!--begin::Toggle-->
                        <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse"
                             data-bs-target="#kt_create_new_payment_method_2">
                            <!--begin::Arrow-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="5"
                                                                                      fill="black"/>
																				<rect x="6.0104" y="10.9247" width="12"
                                                                                      height="2" rx="1" fill="black"/>
																			</svg>
																		</span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="5"
                                                                                      fill="black"/>
																				<rect x="10.8891" y="17.8033" width="12"
                                                                                      height="2" rx="1"
                                                                                      transform="rotate(-90 10.8891 17.8033)"
                                                                                      fill="black"/>
																				<rect x="6.01041" y="10.9247" width="12"
                                                                                      height="2" rx="1" fill="black"/>
																			</svg>
																		</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Arrow-->
                            <!--begin::Logo-->
                            <img src="assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt=""/>
                            <!--end::Logo-->
                            <!--begin::Summary-->
                            <div class="me-3">
                                <div class="d-flex align-items-center fw-bolder">Visa</div>
                                <div class="text-muted">Expires Feb 2022</div>
                            </div>
                            <!--end::Summary-->
                        </div>
                        <!--end::Toggle-->
                        <!--begin::Input-->
                        <div class="d-flex my-3 ms-9">
                            <!--begin::Radio-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="radio" name="payment_method"/>
                            </label>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div id="kt_create_new_payment_method_2" class="collapse fs-6 ps-10">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap py-5">
                            <!--begin::Col-->
                            <div class="flex-equal me-5">
                                <table class="table table-flush fw-bold gy-1">
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Name</td>
                                        <td class="text-gray-800">Melody Macy</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Number</td>
                                        <td class="text-gray-800">**** 5231</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Expires</td>
                                        <td class="text-gray-800">02/2022</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Type</td>
                                        <td class="text-gray-800">Visa credit card</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Issuer</td>
                                        <td class="text-gray-800">ENBANK</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">ID</td>
                                        <td class="text-gray-800">id_w2r84jdy723</td>
                                    </tr>
                                </table>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="flex-equal">
                                <table class="table table-flush fw-bold gy-1">
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Billing address</td>
                                        <td class="text-gray-800">UK</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Phone</td>
                                        <td class="text-gray-800">No phone provided</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Email</td>
                                        <td class="text-gray-800">
                                            <a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Origin</td>
                                        <td class="text-gray-800">United Kingdom
                                            <div class="symbol symbol-20px symbol-circle ms-2">
                                                <img src="assets/media/flags/united-kingdom.svg"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">CVC check</td>
                                        <td class="text-gray-800">Passed
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-success">
																					<svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3"
                                                                                              d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                                                              fill="black"/>
																						<path
                                                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                                                            fill="black"/>
																					</svg>
																				</span>
                                            <!--end::Svg Icon--></td>
                                    </tr>
                                </table>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Option-->
                <div class="separator separator-dashed"></div>
                <!--begin::Option-->
                <div class="py-1">
                    <!--begin::Header-->
                    <div class="py-3 d-flex flex-stack flex-wrap">
                        <!--begin::Toggle-->
                        <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse"
                             data-bs-target="#kt_create_new_payment_method_3">
                            <!--begin::Arrow-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="5"
                                                                                      fill="black"/>
																				<rect x="6.0104" y="10.9247" width="12"
                                                                                      height="2" rx="1" fill="black"/>
																			</svg>
																		</span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="5"
                                                                                      fill="black"/>
																				<rect x="10.8891" y="17.8033" width="12"
                                                                                      height="2" rx="1"
                                                                                      transform="rotate(-90 10.8891 17.8033)"
                                                                                      fill="black"/>
																				<rect x="6.01041" y="10.9247" width="12"
                                                                                      height="2" rx="1" fill="black"/>
																			</svg>
																		</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Arrow-->
                            <!--begin::Logo-->
                            <img src="assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt=""/>
                            <!--end::Logo-->
                            <!--begin::Summary-->
                            <div class="me-3">
                                <div class="d-flex align-items-center fw-bolder">American Express
                                    <div class="badge badge-light-danger ms-5">Expired</div>
                                </div>
                                <div class="text-muted">Expires Aug 2021</div>
                            </div>
                            <!--end::Summary-->
                        </div>
                        <!--end::Toggle-->
                        <!--begin::Input-->
                        <div class="d-flex my-3 ms-9">
                            <!--begin::Radio-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="radio" name="payment_method"/>
                            </label>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div id="kt_create_new_payment_method_3" class="collapse fs-6 ps-10">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap py-5">
                            <!--begin::Col-->
                            <div class="flex-equal me-5">
                                <table class="table table-flush fw-bold gy-1">
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Name</td>
                                        <td class="text-gray-800">Max Smith</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Number</td>
                                        <td class="text-gray-800">**** 7656</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Expires</td>
                                        <td class="text-gray-800">08/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Type</td>
                                        <td class="text-gray-800">American express credit card</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Issuer</td>
                                        <td class="text-gray-800">USABANK</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">ID</td>
                                        <td class="text-gray-800">id_89457jcje63</td>
                                    </tr>
                                </table>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="flex-equal">
                                <table class="table table-flush fw-bold gy-1">
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Billing address</td>
                                        <td class="text-gray-800">US</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Phone</td>
                                        <td class="text-gray-800">No phone provided</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Email</td>
                                        <td class="text-gray-800">
                                            <a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Origin</td>
                                        <td class="text-gray-800">United States of America
                                            <div class="symbol symbol-20px symbol-circle ms-2">
                                                <img src="assets/media/flags/united-states.svg"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">CVC check</td>
                                        <td class="text-gray-800">Failed
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-danger">
																					<svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="6"
                                                                                              y="17.3137" width="16"
                                                                                              height="2" rx="1"
                                                                                              transform="rotate(-45 6 17.3137)"
                                                                                              fill="black"/>
																						<rect x="7.41422" y="6"
                                                                                              width="16" height="2"
                                                                                              rx="1"
                                                                                              transform="rotate(45 7.41422 6)"
                                                                                              fill="black"/>
																					</svg>
																				</span>
                                            <!--end::Svg Icon--></td>
                                    </tr>
                                </table>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Option-->
            </div>
            <!--end::Options-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Payment method-->
    <!--begin::Modal - New Card-->
    <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Yeni Kurs Ekle</h2>
                    <!--end::Modal title-->
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
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_new_card_form" class="form" action="#">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Kurs Adı</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="Kullancılar tarafından kursun görünecek adı"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" id="name" class="form-control form-control-solid" placeholder=""
                                   name="name" value=""/>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span>Kurs Açıklaması</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="Kullancılar tarafından kursun görünecek açıklaması"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" id="description" class="form-control form-control-solid" placeholder=""
                                   name="description" value=""/>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-10">
                            <!--begin::Col-->
                            <div class="col-md-8 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold form-label mb-2">Kurs Kategorisi</label>
                                <!--end::Label-->
                                <!--begin::Row-->
                                <div class="row fv-row">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <select name="card_expiry_month" id="category"
                                                class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="true" data-placeholder="Kategori">
                                            <option></option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Limit</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Maksimum katılımcı sayısı"></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <!--begin::Input-->
                                    <input type="text" id="limit" class="form-control form-control-solid" minlength="1"
                                           maxlength="5000" placeholder="0" name="limit"/>
                                    <!--end::Input-->
                                    <!--begin::CVV icon-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                        <span class="svg-icon svg-icon-2hx">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
<path
    d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z"
    fill="black"/>
<rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
<path
    d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z"
    fill="black"/>
<rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
</svg>
																	</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::CVV icon-->
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label for="image" class="form-label">Kurs Fotoğrafı</label>
                            <br>
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                 style="background-image: url({{asset('admin/assets/media/avatars/blank.png')}})">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-150px h-150px"
                                     style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                    data-kt-image-input-action="change"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Kurs Fotoğrafı Değiştir">
                                    <i class="bi bi-pencil-fill fs-7"></i>

                                    <!--begin::Inputs-->
                                    <input type="file" id="image" name="image" url="assets/media/avatars/300-1.jpg"
                                           accept=".png, .jpg, .jpeg"/>
                                    <input type="hidden" name="avatar_remove"/>
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->

                                <!--begin::Cancel button-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                    data-kt-image-input-action="cancel"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Kurs Fotoğrafı İptal ">
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
                            <!--end::Image input-->
                        </div>

                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">

                            <button type="button" id="new_lesson" class="btn btn-primary">
                                <span class="indicator-label">Kaydet</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Card-->
@endsection

@section('js')
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



    <script>
        $('#new_lesson').click(function (e) {
            let name = $('#name').val();
            let description = $('#description').val();
            let image = $('#image').attr('url');
            let category = $('#category').val();
            let limit = $('#limit').val();

            if (name != '' && description != '' && image != '' && category != '' && limit != '') {
                $.ajax({
                    type: 'POST',
                    url: '{{route('lesson.add')}}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        name: name,
                        description: description,
                        image: image,
                        category: category,
                        limit: limit,
                    },
                    success: function (data) {
                        console.log("success");
                        if (data.status == 'success') {
                            $('#new_lesson_modal').modal('hide');
                            Swal.fire({
                                text: data.message,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Tamam",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then((result) => {
                               window.location.reload();
                            });
                        }
                        else {
                            Swal.fire({
                                text: data.message,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Tamam",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    },
                    error: function (data) {
                        console.log("error");
                    }
                });

            }}
        )
            ;

    </script>

@endsection
