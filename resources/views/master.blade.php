@extends("../base")
<!--begin::Body-->
@section('body')
    <body id="kt_body" style="background-image: url(/assets/media/patterns/header-bg-dark.png)" class="dark-mode header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
            @include('layouts.header')
            <!--end::Header-->
                <!--begin::Toolbar-->
            @include('layouts.toolbar')
            <!--end::Toolbar-->
                <!--begin::Container-->
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                    <!--begin::Aside-->

                <!--end::Aside-->
                    <!--begin::Post-->
                   @yield('post')
                    <!--end::Post-->
                </div>
                <!--end::Container-->
                <!--begin::Footer-->
            @include('layouts.footer')
            <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->



    <!--end::Drawers-->
    <!--begin::Modals-->
    <!--begin::Modal - Invite Friends-->
{{--    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">--}}
{{--        <!--begin::Modal dialog-->--}}
{{--        <div class="modal-dialog mw-650px">--}}
{{--            <!--begin::Modal content-->--}}
{{--            <div class="modal-content">--}}
{{--                <!--begin::Modal header-->--}}
{{--                <div class="modal-header pb-0 border-0 justify-content-end">--}}
{{--                    <!--begin::Close-->--}}
{{--                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">--}}
{{--                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->--}}
{{--                        <span class="svg-icon svg-icon-1">--}}
{{--								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">--}}
{{--									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>--}}
{{--									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>--}}
{{--								</svg>--}}
{{--							</span>--}}
{{--                        <!--end::Svg Icon-->--}}
{{--                    </div>--}}
{{--                    <!--end::Close-->--}}
{{--                </div>--}}
{{--                <!--begin::Modal header-->--}}
{{--                <!--begin::Modal body-->--}}
{{--                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">--}}
{{--                    <!--begin::Heading-->--}}
{{--                    <div class="text-center mb-13">--}}
{{--                        <!--begin::Title-->--}}
{{--                        <h1 class="mb-3">Invite a Friend</h1>--}}
{{--                        <!--end::Title-->--}}
{{--                        <!--begin::Description-->--}}
{{--                        <div class="text-muted fw-bold fs-5">If you need more info, please check out--}}
{{--                            <a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>--}}
{{--                        <!--end::Description-->--}}
{{--                    </div>--}}
{{--                    <!--end::Heading-->--}}
{{--                    <!--begin::Google Contacts Invite-->--}}
{{--                    <div class="btn btn-light-primary fw-bolder w-100 mb-8">--}}
{{--                        <img alt="Logo" src="../../assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3">Invite Gmail Contacts</div>--}}
{{--                    <!--end::Google Contacts Invite-->--}}
{{--                    <!--begin::Separator-->--}}
{{--                    <div class="separator d-flex flex-center mb-8">--}}
{{--                        <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>--}}
{{--                    </div>--}}
{{--                    <!--end::Separator-->--}}
{{--                    <!--begin::Textarea-->--}}
{{--                    <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>--}}
{{--                    <!--end::Textarea-->--}}
{{--                    <!--begin::Users-->--}}
{{--                    <div class="mb-10">--}}
{{--                        <!--begin::Heading-->--}}
{{--                        <div class="fs-6 fw-bold mb-2">Your Invitations</div>--}}
{{--                        <!--end::Heading-->--}}
{{--                        <!--begin::List-->--}}
{{--                        <div class="mh-300px scroll-y me-n7 pe-7">--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <img alt="Pic" src="../../assets/media/avatars/150-1.jpg">--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>--}}
{{--                                        <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2" selected="selected">Owner</option>--}}
{{--                                        <option value="3">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>--}}
{{--                                        <div class="fw-bold text-muted">melody@altbox.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1" selected="selected">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <img alt="Pic" src="../../assets/media/avatars/150-26.jpg">--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>--}}
{{--                                        <div class="fw-bold text-muted">max@kt.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3" selected="selected">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <img alt="Pic" src="../../assets/media/avatars/150-4.jpg">--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>--}}
{{--                                        <div class="fw-bold text-muted">sean@dellito.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2" selected="selected">Owner</option>--}}
{{--                                        <option value="3">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <img alt="Pic" src="../../assets/media/avatars/150-15.jpg">--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>--}}
{{--                                        <div class="fw-bold text-muted">brian@exchange.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3" selected="selected">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>--}}
{{--                                        <div class="fw-bold text-muted">mikaela@pexcom.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2" selected="selected">Owner</option>--}}
{{--                                        <option value="3">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <img alt="Pic" src="../../assets/media/avatars/150-8.jpg">--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>--}}
{{--                                        <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3" selected="selected">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>--}}
{{--                                        <div class="fw-bold text-muted">olivia@corpmail.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2" selected="selected">Owner</option>--}}
{{--                                        <option value="3">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>--}}
{{--                                        <div class="fw-bold text-muted">owen.neil@gmail.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1" selected="selected">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <img alt="Pic" src="../../assets/media/avatars/150-6.jpg">--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>--}}
{{--                                        <div class="fw-bold text-muted">dam@consilting.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3" selected="selected">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>--}}
{{--                                        <div class="fw-bold text-muted">emma@intenso.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2" selected="selected">Owner</option>--}}
{{--                                        <option value="3">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <img alt="Pic" src="../../assets/media/avatars/150-7.jpg">--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>--}}
{{--                                        <div class="fw-bold text-muted">ana.cf@limtel.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1" selected="selected">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <span class="symbol-label bg-light-info text-info fw-bold">A</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>--}}
{{--                                        <div class="fw-bold text-muted">robert@benko.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3" selected="selected">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <img alt="Pic" src="../../assets/media/avatars/150-17.jpg">--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>--}}
{{--                                        <div class="fw-bold text-muted">miller@mapple.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3" selected="selected">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <span class="symbol-label bg-light-success text-success fw-bold">L</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>--}}
{{--                                        <div class="fw-bold text-muted">lucy.m@fentech.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2" selected="selected">Owner</option>--}}
{{--                                        <option value="3">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <img alt="Pic" src="../../assets/media/avatars/150-10.jpg">--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>--}}
{{--                                        <div class="fw-bold text-muted">ethan@loop.com.au</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1" selected="selected">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                            <!--begin::User-->--}}
{{--                            <div class="d-flex flex-stack py-4">--}}
{{--                                <!--begin::Details-->--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <!--begin::Avatar-->--}}
{{--                                    <div class="symbol symbol-35px symbol-circle">--}}
{{--                                        <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Avatar-->--}}
{{--                                    <!--begin::Details-->--}}
{{--                                    <div class="ms-5">--}}
{{--                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>--}}
{{--                                        <div class="fw-bold text-muted">owen.neil@gmail.com</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Details-->--}}
{{--                                </div>--}}
{{--                                <!--end::Details-->--}}
{{--                                <!--begin::Access menu-->--}}
{{--                                <div class="ms-2 w-100px">--}}
{{--                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">--}}
{{--                                        <option value="1">Guest</option>--}}
{{--                                        <option value="2">Owner</option>--}}
{{--                                        <option value="3" selected="selected">Can Edit</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end::Access menu-->--}}
{{--                            </div>--}}
{{--                            <!--end::User-->--}}
{{--                        </div>--}}
{{--                        <!--end::List-->--}}
{{--                    </div>--}}
{{--                    <!--end::Users-->--}}
{{--                    <!--begin::Notice-->--}}
{{--                    <div class="d-flex flex-stack">--}}
{{--                        <!--begin::Label-->--}}
{{--                        <div class="me-5 fw-bold">--}}
{{--                            <label class="fs-6">Adding Users by Team Members</label>--}}
{{--                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>--}}
{{--                        </div>--}}
{{--                        <!--end::Label-->--}}
{{--                        <!--begin::Switch-->--}}
{{--                        <label class="form-check form-switch form-check-custom form-check-solid">--}}
{{--                            <input class="form-check-input" type="checkbox" value="1" checked="checked">--}}
{{--                            <span class="form-check-label fw-bold text-muted">Allowed</span>--}}
{{--                        </label>--}}
{{--                        <!--end::Switch-->--}}
{{--                    </div>--}}
{{--                    <!--end::Notice-->--}}
{{--                </div>--}}
{{--                <!--end::Modal body-->--}}
{{--            </div>--}}
{{--            <!--end::Modal content-->--}}
{{--        </div>--}}
{{--        <!--end::Modal dialog-->--}}
{{--    </div>--}}
    <!--end::Modal - Invite Friend-->
    <!--begin::Modal - Create App-->
    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Create App</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
								</svg>
							</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                        <!--begin::Aside-->
                        <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <!--begin::Nav-->
                            <div class="stepper-nav ps-lg-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Details</h3>
                                        <div class="stepper-desc">Name your App</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--begin::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Frameworks</h3>
                                        <div class="stepper-desc">Define your app framework</div>
                                    </div>
                                    <!--begin::Label-->
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Database</h3>
                                        <div class="stepper-desc">Select the app database type</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Billing</h3>
                                        <div class="stepper-desc">Provide payment details</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Completed</h3>
                                        <div class="stepper-desc">Review and Submit</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                <!--begin::Step 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">App Name</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                <span class="required">Category</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app category"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin:Options-->
                                            <div class="fv-row">
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="black"></path>
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="black"></path>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
															</span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Quick Online Courses</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
															</span>
                                                        <!--end:Info-->
														</span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="1">
														</span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-danger">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																			<rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
																			<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
																			<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
																			<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
															</span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Face to Face Discussions</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
															</span>
                                                        <!--end:Info-->
														</span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="2">
														</span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-success">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="black"></path>
																			<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="black"></path>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
															</span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Full Intro Training</span>
																<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
															</span>
                                                        <!--end:Info-->
														</span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="3">
														</span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end:Options-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                <span class="required">Select Framework</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-html5 text-warning fs-2x"></i>
															</span>
														</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">HTML5</span>
															<span class="fs-7 text-muted">Base Web Projec</span>
														</span>
                                                    <!--end:Info-->
													</span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="framework" value="1">
													</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fab fa-react text-success fs-2x"></i>
															</span>
														</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">ReactJS</span>
															<span class="fs-7 text-muted">Robust and flexible app framework</span>
														</span>
                                                    <!--end:Info-->
													</span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="2">
													</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-angular text-danger fs-2x"></i>
															</span>
														</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Angular</span>
															<span class="fs-7 text-muted">Powerful data mangement</span>
														</span>
                                                    <!--end:Info-->
													</span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="3">
													</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<i class="fab fa-vuejs text-primary fs-2x"></i>
															</span>
														</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Vue</span>
															<span class="fs-7 text-muted">Lightweight and responsive framework</span>
														</span>
                                                    <!--end:Info-->
													</span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="4">
													</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="required fs-5 fw-bold mb-2">Database Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                <span class="required">Select Database Engine</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fas fa-database text-success fs-2x"></i>
															</span>
														</span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">MySQL</span>
															<span class="fs-7 text-muted">Basic MySQL database</span>
														</span>
                                                    <!--end::Info-->
													</span>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1">
													</span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-google text-danger fs-2x"></i>
															</span>
														</span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Firebase</span>
															<span class="fs-7 text-muted">Google based app data management</span>
														</span>
                                                    <!--end::Info-->
													</span>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="2">
													</span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-amazon text-warning fs-2x"></i>
															</span>
														</span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">DynamoDB</span>
															<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
														</span>
                                                    <!--end::Info-->
													</span>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="3">
													</span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                <span class="required">Name On Card</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe">
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111">
                                                <!--end::Input-->
                                                <!--begin::Card logos-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                    <img src="../../assets/media/svg/card-logos/dark/visa.svg" alt="" class="h-25px">
                                                    <img src="../../assets/media/svg/card-logos/dark/mastercard.svg" alt="" class="h-25px">
                                                    <img src="../../assets/media/svg/card-logos/dark/american-express.svg" alt="" class="h-25px">
                                                </div>
                                                <!--end::Card logos-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-10">
                                            <!--begin::Col-->
                                            <div class="col-md-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
                                                <!--end::Label-->
                                                <!--begin::Row-->
                                                <div class="row fv-row">
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                            <option></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                            <option></option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
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
                                                    <span class="required">CVV</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv">
                                                    <!--end::Input-->
                                                    <!--begin::CVV icon-->
                                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                        <span class="svg-icon svg-icon-2hx">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																	<path d="M22 7H2V11H22V7Z" fill="black"></path>
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black"></path>
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
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
                                                <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" checked="checked">
                                                <span class="form-check-label fw-bold text-muted">Save Card</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100 text-center">
                                        <!--begin::Heading-->
                                        <h1 class="fw-bolder text-dark mb-3">Release!</h1>
                                        <!--end::Heading-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-bold fs-3">Submit your app to kickstart your project.</div>
                                        <!--end::Description-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4 py-15">
                                            <img src="../../assets/media/illustrations/dozzy-1/9-dark.png" alt="" class="w-100 mh-300px">
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                            <span class="svg-icon svg-icon-3 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black"></rect>
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->Back</button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
													</svg>
												</span>
                                                    <!--end::Svg Icon--></span>
                                            <span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon--></button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create App-->
    <!--begin::Modal - New Target-->
    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
								</svg>
							</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Set First Target</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-bold fs-5">If you need more info, please check
                                <a href="#" class="fw-bolder link-primary">Project Guidelines</a>.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Target Title</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title">
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Assign</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
                                    <option value="">Select user...</option>
                                    <option value="1">Karina Clark</option>
                                    <option value="2">Robert Doe</option>
                                    <option value="3">Niel Owen</option>
                                    <option value="4">Olivia Wild</option>
                                    <option value="5">Sean Bean</option>
                                </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Due Date</label>
                                <!--begin::Input-->
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black"></path>
												<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black"></path>
												<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black"></path>
											</svg>
										</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Datepicker-->
                                    <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date">
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-bold mb-2">Target Details</label>
                            <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tags</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" value="Important, Urgent" name="tags">
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-stack mb-8">
                            <!--begin::Label-->
                            <div class="me-5">
                                <label class="fs-6 fw-bold">Adding Users by Team Members</label>
                                <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" checked="checked">
                                <span class="form-check-label fw-bold text-muted">Allowed</span>
                            </label>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-15 fv-row">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="fw-bold me-5">
                                    <label class="fs-6">Notifications</label>
                                    <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Checkboxes-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked">
                                        <span class="form-check-label fw-bold">Email</span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone">
                                        <span class="form-check-label fw-bold">Phone</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Checkboxes-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Target-->
    <!--end::Modals-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
				</svg>
			</span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
   @include('layouts.js')

    </body>
@endsection
