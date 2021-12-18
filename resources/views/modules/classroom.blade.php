@extends("../master")

@section('title', 'Sınıf Listesi')
@section('description', 'Panelde bulunan tüm sınıflara ulaşabileceğiniz, filtreleme ve arama yapabileceğiniz sayfa.')
<!--end::Head-->
<!--begin::Body-->
@section('post')

    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewbox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                          height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                          fill="black"></rect>
													<path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="black"></path>
												</svg>
											</span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-user-table-filter="search"
                               class="form-control form-control-solid w-250px ps-14" placeholder="Sınıf ara">
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <!--begin::Filter-->
                        <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewbox="0 0 24 24" fill="none">
													<path
                                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                                        fill="black"></path>
												</svg>
											</span>
                            <!--end::Svg Icon-->Filtre
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filtre Seçenekleri</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Separator-->
                            <!--begin::Content-->
                            <div class="px-7 py-5" data-kt-user-table-filter="form">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-bold">Yetkili:</label>
                                    <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                            data-placeholder="Seç" data-allow-clear="true"
                                            data-kt-user-table-filter="Yetkili" data-hide-search="true">
                                        <option></option>
                                        @foreach($users_list as $user)
                                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->

                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                            class="btn btn-light btn-active-light-primary fw-bold me-2 px-6"
                                            data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Sıfırla
                                    </button>
                                    <button type="submit" class="btn btn-primary fw-bold px-6"
                                            data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Uygula
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Filter-->
                        <!--begin::Export-->
                        <button style="display: none" type="button" class="btn btn-light-primary me-3"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewbox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1"
                                                          transform="rotate(90 12.75 4.25)" fill="black"></rect>
													<path
                                                        d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                                        fill="black"></path>
													<path
                                                        d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                                        fill="#C4C4C4"></path>
												</svg>
											</span>
                            <!--end::Svg Icon-->Export
                        </button>
                        <!--end::Export-->
                        <!--begin::Add user-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_app">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewbox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                          rx="1" transform="rotate(-90 11.364 20.364)"
                                                          fill="black"></rect>
													<rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                          fill="black"></rect>
												</svg>
											</span>
                            <!--end::Svg Icon-->Sınıf Ekle
                        </button>
                        <!--end::Add user-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Group actions-->
                    <div style="display: none" class="d-flex justify-content-end align-items-center d-none"
                         data-kt-user-table-toolbar="selected">
                        <div class="fw-bolder me-5">
                            <span class="me-2" data-kt-user-table-select="selected_count"></span>Seçildi
                        </div>
                        <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
                            Seçilenleri Sil
                        </button>
                    </div>
                    <!--end::Group actions-->
                    <!--begin::Modal - Adjust Balance-->
                    <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Export Users</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                         data-kt-users-modal-action="close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewbox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                          height="2" rx="1"
                                                                          transform="rotate(-45 6 17.3137)"
                                                                          fill="black"></rect>
																	<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                          transform="rotate(45 7.41422 6)"
                                                                          fill="black"></rect>
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
                                    <form id="kt_modal_export_users_form" class="form" action="#">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mb-2">Select Roles:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="role" data-control="select2" data-placeholder="Select a role"
                                                    data-hide-search="true"
                                                    class="form-select form-select-solid fw-bolder">
                                                <option></option>
                                                <option value="Administrator">Administrator</option>
                                                <option value="Analyst">Analyst</option>
                                                <option value="Developer">Developer</option>
                                                <option value="Support">Support</option>
                                                <option value="Trial">Trial</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold form-label mb-2">Select Export
                                                Format:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="format" data-control="select2"
                                                    data-placeholder="Select a format" data-hide-search="true"
                                                    class="form-select form-select-solid fw-bolder">
                                                <option></option>
                                                <option value="excel">Excel</option>
                                                <option value="pdf">PDF</option>
                                                <option value="cvs">CVS</option>
                                                <option value="zip">ZIP</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="text-center">
                                            <button type="reset" class="btn btn-light me-3"
                                                    data-kt-users-modal-action="cancel">Discard
                                            </button>
                                            <button type="submit" class="btn btn-primary"
                                                    data-kt-users-modal-action="submit">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
																	<span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                    <!--begin::Modal - Add task-->

                    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-900px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2>Sınıf Ekle</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"></rect>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"></rect>
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
                                    <div
                                        class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                                        id="kt_modal_create_app_stepper">
                                        <!--begin::Aside-->
                                        <div
                                            class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
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
                                                        <h3 class="stepper-title">Genel</h3>
                                                        <div class="stepper-desc">Sınıf genel bilgileri</div>
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
                                                        <h3 class="stepper-title">Yetki</h3>
                                                        <div class="stepper-desc">Sınıfın kime ait olduğu vb.</div>
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
                                                        <h3 class="stepper-title">Özellikler</h3>
                                                        <div class="stepper-desc">Sınıfa ait özellikler tablosu</div>
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
                                                        <h3 class="stepper-title">Tamamlayın</h3>
                                                        <div class="stepper-desc">Gözden geçirin ve onaylayın</div>
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Step 4-->
                                            </div>
                                            <!--end::Nav-->
                                        </div>
                                        <!--begin::Aside-->
                                        <!--begin::Content-->
                                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                                            <!--begin::Form-->
                                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form" method="POST" action="{{ route('create_classroom') }}">

                                                <!--begin::Step 1-->
                                                <div class="current" data-kt-stepper-element="content">@csrf
                                                    <div class="w-100">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                                <span class="required">Sınıf İsmi</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                   data-bs-toggle="tooltip"
                                                                   title="Specify your unique app name"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text"
                                                                   class="form-control form-control-lg form-control-solid"
                                                                   name="title" placeholder="TP202"
                                                                   style="text-transform:uppercase" value="" maxlength="15" required>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                                <span class="required">Açıklama</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                   data-bs-toggle="tooltip"
                                                                   title="Select your app category"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin:Options-->
                                                            <textarea type="text"
                                                                      class="form-control form-control-lg form-control-solid"
                                                                      name="description"
                                                                      placeholder="Sınıf kısa açıklaması" required></textarea>
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
                                                                <span class="required">Yetkili</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                   data-bs-toggle="tooltip"
                                                                   title="Specify your apps framework"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <select
                                                                    class="form-select form-select-solid"
                                                                    data-control="select2"
                                                                    data-placeholder="Yetkiliyi seçin" name="author" required>
                                                                <option></option>
                                                                @foreach($users_list as $user)
                                                                    <option
                                                                        value="{{ $user->id }}">{{ $user->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="pt-10"><label class="d-flex align-items-center fs-5 fw-bold mb-4 ">
                                                                <span class="required">Kapasite</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                   data-bs-toggle="tooltip"
                                                                   title="Specify your apps framework"></i>
                                                            </label>
                                                            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="capacity" min="0" maxlength="5" max="200" class="form-control form-control-solid" value="30" required>
                                                            </div>
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
                                                            <label class="required fs-5 fw-bold mb-2">Sınıf Özellikleri</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid m-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="1" name="blackboard"/>
                                                                        <span class="form-check-label fw-bold">Kara Tahta</span>
                                                                    </label>
                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid m-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="1" name="special_seats"/>
                                                                        <span class="form-check-label fw-bold">Özellikli Koltuk</span>
                                                                    </label>
                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid m-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="1" name="proffessor_chair"/>
                                                                        <span class="form-check-label fw-bold">Profesör Kürsüsü</span>
                                                                    </label>
                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid m-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="1" name="projector" />
                                                                        <span
                                                                            class="form-check-label fw-bold">Projektör</span>
                                                                    </label>
                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid m-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="1" name="smartboard" />
                                                                        <span class="form-check-label fw-bold">Akıllı Tahta</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">

                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid m-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="1" name="internet"/>
                                                                        <span
                                                                            class="form-check-label fw-bold">İnternet</span>
                                                                    </label>
                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid m-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="1" name="pc"/>
                                                                        <span class="form-check-label fw-bold">PC</span>
                                                                    </label>
                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid m-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="1" name="webcam"/>
                                                                        <span
                                                                            class="form-check-label fw-bold">Webcam</span>
                                                                    </label>
                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid m-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="1" name="speakers"/>
                                                                        <span class="form-check-label fw-bold">Hoparlör Sistemi</span>
                                                                    </label>
                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid m-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="1" name="ac"/>
                                                                        <span
                                                                            class="form-check-label fw-bold">Klima</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->

                                                    </div>
                                                </div>
                                                <!--end::Step 3-->

                                                <!--begin::Step 4-->
                                                <div data-kt-stepper-element="content">
                                                    <div class="w-100 text-center">
                                                        <!--begin::Heading-->
                                                        <h1 class="fw-bolder text-dark mb-3">Tamamlayın</h1>
                                                        <!--end::Heading-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fw-bold fs-3">Tüm özellikleri doğru girdiyseniz sınıfı tamamlayın!
                                                        </div>
                                                        <!--end::Description-->
                                                        <!--begin::Illustration-->
                                                        <div class="text-center px-4 py-15">
                                                            <img
                                                                src="/assets/media/illustrations/dozzy-1/9-dark.png"
                                                                alt="" class="w-100 mh-300px">
                                                        </div>
                                                        <input type="submit" class="btn btn-lg btn-primary" placeholder="Gönder">
                                                        <!--end::Illustration-->
                                                    </div>
                                                </div>
                                                <!--end::Step 5-->
                                                <!--begin::Actions-->
                                                <div class="d-flex flex-stack pt-10">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-2">
                                                        <button type="button" class="btn btn-lg btn-light-primary me-3"
                                                                data-kt-stepper-action="previous">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                                            <span class="svg-icon svg-icon-3 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewbox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
                                                          fill="black"></rect>
													<path
                                                        d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                        fill="black"></path>
												</svg>
											</span>
                                                            <!--end::Svg Icon-->Geri
                                                        </button>
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Wrapper-->
                                                    <div>
                                                        <button type="button" class="btn btn-lg btn-primary"
                                                                data-kt-stepper-action="submit">
												<span class="indicator-label">Tamamla
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewbox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                              transform="rotate(-180 18 13)" fill="black"></rect>
														<path
                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                            fill="black"></path>
													</svg>
												</span>
                                                    <!--end::Svg Icon--></span>
                                                            <span class="indicator-progress">Lültfen Bekleyin...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                        <button type="button" class="btn btn-lg btn-primary"
                                                                data-kt-stepper-action="next">İleri
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewbox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                          transform="rotate(-180 18 13)" fill="black"></rect>
													<path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="black"></path>
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


                    <!--end::Modal - Add task-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
            @if($errors->any())
                @if($errors->first()=='success')
                    <!--begin::Alert-->
                        <div class="alert alert-dismissible bg-light-success border border-success d-flex flex-column flex-sm-row p-5 mb-10">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2hx svg-icon-success me-4 mb-5 mb-sm-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
</svg></span>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                <!--begin::Title-->
                                <h5 class="mb-1">Başarılı!</h5>
                                <!--end::Title-->
                                <!--begin::Content-->
                                <span>Eklediğiniz sınıf başarı ile eklendi...</span>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Close-->
                            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                <i class="bi bi-x fs-1 text-success"></i>
                            </button>
                            <!--end::Close-->
                        </div>
                        <!--end::Alert-->
                @elseif($errors->first()=='fail')
                    <!--begin::Alert-->
                        <div class="alert alert-dismissible bg-light-warning border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2hx svg-icon-warning me-4 mb-5 mb-sm-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
<rect x="9" y="13.0283" width="7.3536" height="1.2256" rx="0.6128" transform="rotate(-45 9 13.0283)" fill="black"/>
<rect x="9.86664" y="7.93359" width="7.3536" height="1.2256" rx="0.6128" transform="rotate(45 9.86664 7.93359)" fill="black"/>
</svg></span>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                <!--begin::Title-->
                                <h5 class="mb-1">Hata</h5>
                                <!--end::Title-->
                                <!--begin::Content-->
                                <span>Sınıf bir sebepten ötürü eklenemedi. Lütfen daha sonra tekrar deneyin...</span>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Close-->
                            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                <i class="bi bi-x fs-1 text-warning"></i>
                            </button>
                            <!--end::Close-->
                        </div>
                        <!--end::Alert-->
                @endif
            @endif
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_classroom">
                    <!--begin::Table head-->
                    <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2 d-none">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                       data-kt-check-target="#kt_table_users .form-check-input" value="1">
                            </div>
                        </th>
                        <th class="min-w-125px">İsim</th>
                        <th class="min-w-125px">Açıklama</th>
                        <th class="min-w-125px">Kapasite</th>
                        <th class="min-w-125px">Yetkili</th>
                        <th class="min-w-125px">Eklenme Tarihi</th>
                        <th class="text-end min-w-100px">Eylemler</th>
                    </tr>
                    <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="text-gray-600 fw-bold">
                    @foreach($classroom_list as $classroom)
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td class="d-none">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::User=-->
                            <td>

                                <!--begin::User details-->

                                <a href="#" class="text-gray-800 text-hover-primary mb-1 text-capitalize">{{ $classroom->title }}</a>


                                <!--begin::User details-->
                            </td>
                            <!--end::User=-->
                            <!--begin::Role=-->
                            <td>{{ $classroom->description }}</td>
                            <!--end::Role=-->
                            <!--begin::Last login=-->
                            <td>
                                <div class="badge badge-light fw-bolder">{{ $classroom->capacity }} Kişi</div>
                            </td>
                            <!--end::Last login=-->
                            <!--begin::Two step=-->
                            <td>
                                <div class="badge badge-light-primary fw-bolder">{{ $classroom->name }}</div>
                            </td>
                            <!--end::Two step=-->
                            <!--begin::Joined-->
                            <td>{{ $classroom->created_at->format('d M Y') }}</td>
                            <!--begin::Joined-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Eylemler
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewbox="0 0 24 24" fill="none">
															<path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="black"></path>
														</svg>
													</span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="view.html" class="menu-link px-3">Düzenle</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-classroom-table-filter="delete_row">Sil</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                    @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Post-->


@endsection
