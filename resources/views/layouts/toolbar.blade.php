<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <!--begin::Title-->
        <h3 class="text-white fw-bolder fs-2qx me-5">@yield('title')</h3>
        <!--begin::Title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center flex-wrap py-2">
{{--            <!--begin::SearchBar-->--}}
{{--            <div id="kt_header_search" class="d-flex align-items-center w-200px w-lg-250px my-2 me-4 me-lg-6" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">--}}
{{--                <!--begin::Form-->--}}
{{--                <form data-kt-search-element="form" class="search w-100 position-relative" autocomplete="off">--}}
{{--                    <!--begin::Hidden input(Added to disable form autocomplete)-->--}}
{{--                    <input type="hidden">--}}
{{--                    <!--end::Hidden input-->--}}
{{--                    <!--begin::Icon-->--}}
{{--                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->--}}
{{--                    <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-white position-absolute top-50 translate-middle-y ms-5">--}}
{{--											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">--}}
{{--												<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>--}}
{{--												<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>--}}
{{--											</svg>--}}
{{--										</span>--}}
{{--                    <!--end::Svg Icon-->--}}
{{--                    <!--end::Icon-->--}}
{{--                    <!--begin::Input-->--}}
{{--                    <input type="text" class="form-control ps-15" name="search" value="" placeholder="Arama..." data-kt-search-element="input">--}}
{{--                    <!--end::Input-->--}}
{{--                    <!--begin::Spinner-->--}}
{{--                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">--}}
{{--											<span class="spinner-border h-15px w-15px align-middle text-white"></span>--}}
{{--										</span>--}}
{{--                    <!--end::Spinner-->--}}
{{--                    <!--begin::Reset-->--}}
{{--                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">--}}
{{--											<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->--}}
{{--											<span class="svg-icon svg-icon-2 svg-icon-white svg-icon-lg-1 me-0">--}}
{{--												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">--}}
{{--													<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>--}}
{{--													<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>--}}
{{--												</svg>--}}
{{--											</span>--}}
{{--                        <!--end::Svg Icon-->--}}
{{--										</span>--}}
{{--                    <!--end::Reset-->--}}
{{--                </form>--}}
{{--                <!--end::Form-->--}}
{{--                <!--begin::Menu-->--}}
{{--                <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden">--}}
{{--                    <!--begin::Wrapper-->--}}
{{--                    <div data-kt-search-element="wrapper">--}}
{{--                        <!--begin::Categories-->--}}
{{--                        <div data-kt-search-element="categories" class="d-flex overflow-auto position-relative" data-kt-buttons="true">--}}
{{--                            <!--begin::Category items-->--}}
{{--                            <a onclick="search_button_all()" class="btn btn-light-primary active rounded-pill me-1 py-2 px-4" data-kt-search-category="all">Hepsi</a>--}}
{{--                            <a onclick="search_button_ders()" class="btn btn-light-primary rounded-pill me-1 py-2 px-4" data-kt-search-category="targets">Ders</a>--}}
{{--                            <a onclick="search_button_sinif()" class="btn btn-light-primary rounded-pill me-1 py-2 px-4" data-kt-search-category="projects">S??n??f</a>--}}
{{--                            <a onclick="search_button_ogretmen()" class="btn btn-light-primary rounded-pill me-1 py-2 px-4" data-kt-search-category="users">????retmen</a>--}}
{{--                            <!--end::Category items-->--}}
{{--                        </div>--}}
{{--                        <!--end::Categories-->--}}
{{--                        <!--begin::Separator-->--}}
{{--                        <div class="separator border-gray-200 my-6"></div>--}}
{{--                        <!--end::Separator-->--}}
{{--                        <!--begin::Recently viewed-->--}}
{{--                        <div data-kt-search-element="results" class="d-none">--}}
{{--                            <!--begin::Items-->--}}
{{--                            <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">--}}

{{--                                <div id="search_ders">--}}
{{--                                <!--begin::Category title-->--}}
{{--                                <h3 class="fs-4 fw-bold m-0 pb-5 " data-kt-search-element="category-title">Ders</h3>--}}
{{--                                <!--end::Category title-->--}}
{{--                                <!--begin::Item-->--}}
{{--                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1 pb-10" data-kt-search-category="targets">--}}
{{--                                    <!--begin::Symbol-->--}}
{{--                                    <div class="symbol symbol-30px me-4">--}}
{{--															<span class="symbol-label bg-light-primary">--}}
{{--																<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->--}}
{{--																<span class="svg-icon svg-icon-2 svg-icon-primary">--}}
{{--																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">--}}
{{--																		<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black"></path>--}}
{{--																		<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>--}}
{{--																	</svg>--}}
{{--																</span>--}}
{{--                                                                <!--end::Svg Icon-->--}}
{{--															</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Symbol-->--}}
{{--                                    <!--begin::Title-->--}}
{{--                                    <div class="fw-bold">--}}
{{--                                        <span class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>--}}
{{--                                        <span class="fs-7 text-muted">#45670</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Title-->--}}
{{--                                </a>--}}
{{--                                <!--end::Item-->--}}
{{--                                </div>--}}
{{--                                <div id="search_sinif">--}}
{{--                                <!--begin::Category title-->--}}
{{--                                <h3 class="fs-4 fw-bold m-0  pb-5" data-kt-search-element="category-title">S??n??f</h3>--}}
{{--                                <!--end::Category title-->--}}
{{--                                <!--begin::Item-->--}}
{{--                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1 pb-10" data-kt-search-category="projects">--}}
{{--                                    <!--begin::Symbol-->--}}
{{--                                    <div class="symbol symbol-30px me-4">--}}
{{--															<span class="symbol-label bg-light-primary">--}}
{{--																<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->--}}
{{--																<span class="svg-icon svg-icon-2 svg-icon-primary">--}}
{{--																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">--}}
{{--																		<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black"></path>--}}
{{--																		<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>--}}
{{--																	</svg>--}}
{{--																</span>--}}
{{--                                                                <!--end::Svg Icon-->--}}
{{--															</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Symbol-->--}}
{{--                                    <!--begin::Title-->--}}
{{--                                    <div class="fw-bold">--}}
{{--                                        <span class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>--}}
{{--                                        <span class="fs-7 text-muted">#45670</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Title-->--}}
{{--                                </a>--}}
{{--                                <!--end::Item-->--}}
{{--                                </div>--}}
{{--                                <!--begin::Category title-->--}}
{{--                                <div id="search_ogretmen">--}}
{{--                                <h3 class="fs-4 fw-bold m-0  pb-5" data-kt-search-element="category-title">????retmen</h3>--}}
{{--                                <!--end::Category title-->--}}
{{--                                @foreach($users_list as $user)--}}
{{--                                <!--begin::Item-->--}}
{{--                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1 pb-10" data-kt-search-category="users">--}}
{{--                                    <!--begin::Symbol-->--}}
{{--                                    <div class="symbol symbol-30px me-4">--}}
{{--                                        <img src="/assets/media/avatars/{{ auth()->user()->avatar }}" alt="{{ $user->name }}">--}}
{{--                                    </div>--}}
{{--                                    <!--end::Symbol-->--}}
{{--                                    <!--begin::Title-->--}}
{{--                                    <div class="fw-bold">--}}
{{--                                        <span class="fs-6 text-gray-800 me-2">{{ $user->name }}</span>--}}
{{--                                        <span class="badge badge-light">{{ $user->faculty }}</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Title-->--}}
{{--                                </a>--}}
{{--                                <!--end::Item-->--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <!--end::Items-->--}}
{{--                        </div>--}}
{{--                        <!--end::Recently viewed-->--}}
{{--                        <!--begin::Recently viewed-->--}}
{{--                        <div data-kt-search-element="recently-viewed">--}}
{{--                            <!--begin::Heading-->--}}

{{--                            <!--end::Heading-->--}}
{{--                            <!--begin::Items-->--}}
{{--                            <div class="text-muted fw-bold fs-5 py-10 text-center">Arama sonu??lar??n??z burada g??sterilecek</div>--}}
{{--                            <!--end::Message-->--}}
{{--                            <!--begin::Illustration-->--}}
{{--                            <div class="text-center px-4">--}}
{{--                                <img src="../assets/media/illustrations/dozzy-1/2-dark.png" style="width:50%" alt="" >--}}
{{--                            </div>--}}
{{--                            <!--end::Illustration-->--}}
{{--                            <!--end::Items-->--}}
{{--                        </div>--}}
{{--                        <!--end::Recently viewed-->--}}
{{--                        <!--begin::Empty-->--}}
{{--                        <div data-kt-search-element="empty" class="text-center d-none">--}}
{{--                            <!--begin::Message-->--}}
{{--                            <div class="text-muted fw-bold fs-5 py-10 text-center">Sonu?? bulunamad??.</div>--}}
{{--                            <!--end::Message-->--}}
{{--                            <!--begin::Illustration-->--}}
{{--                            <div class="text-center px-4">--}}
{{--                                <img src="../assets/media/illustrations/dozzy-1/2-dark.png" style="width:50%" alt="" >--}}
{{--                            </div>--}}
{{--                            <!--end::Illustration-->--}}
{{--                        </div>--}}
{{--                        <!--end::Empty-->--}}
{{--                    </div>--}}
{{--                    <!--end::Wrapper-->--}}
{{--                </div>--}}
{{--                <!--end::Menu-->--}}
{{--            </div>--}}
{{--            <!--end::SearchBar-->--}}
            <a href="{{ route('addtotimetable') }}" class="btn btn-custom btn-color-white btn-active-color-success my-2 me-2 me-lg-6" >Yeni Ders Plan??</a>
            @if(auth()->user()->auth == 1) <a href="#" class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_notify">Yeni Bildirim</a> @endif
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_new_notify" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_notify_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Bildirim ekle</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_new_notify" class="form" action="{{ route('add_not') }}" method="post">
                        @csrf
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">Bildirim Ba??l??????</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Bildirim Ba??l??????" value="??nemli Duyuru">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">Bildirim ????eri??i</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea type="text" name="content" class="form-control form-control-solid mb-3 mb-lg-0" maxlength="255"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">G??nder</span>
                                <span class="indicator-progress">Please wait...
																	<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
    <!--end::Modal - Add task-->
</div>
