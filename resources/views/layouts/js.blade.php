<!--end::Main-->
<script>var hostUrl = "/ceres-html-pro/assets/";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="../../assets/plugins/global/plugins.bundle.js"></script>
<script src="../../assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="../../assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="../../assets/js/custom/widgets.js"></script>
<script src="../../assets/js/custom/apps/chat/chat.js"></script>
<script src="../../assets/js/custom/modals/create-app.js"></script>
<script src="../../assets/js/custom/modals/new-target.js"></script>
<script src="../../assets/js/custom/intro.js"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
@php($route = Route::currentRouteName())
@if($route=='teachers' or $route=='class' or $route=='backup' or $route=='classroom')
<!--begin::Page Custom Javascript(used by this page)-->
<script src="../../../assets/js/custom/apps/file-manager/list.js"></script>
<script src="/assets/js/custom/apps/user-management/users/list/table.js"></script>
<script src="/assets/js/custom/apps/user-management/users/list/export-users.js"></script>
<script src="/assets/js/custom/apps/user-management/users/list/add.js"></script>
<script src="/assets/js/custom/widgets.js"></script>
<script src="/assets/js/custom/apps/chat/chat.js"></script>
<script src="/assets/js/custom/modals/create-app.js"></script>
<script src="/assets/js/custom/modals/new-target.js"></script>
<script src="/assets/js/custom/intro.js"></script>
<!--end::Page Custom Javascript-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
@endif
