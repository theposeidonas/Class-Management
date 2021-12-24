<title>@yield('title') | Class Management System</title>
<meta charset="utf-8">
@php(setlocale(LC_ALL, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish'))
<meta name="description" content="@yield('description')">
<meta name="viewport" content="width=device-width, initial-scale=1">
@php($route = Route::currentRouteName())
@if($route=='timetable')
    <link href="/assets/css/timetable.css" rel="stylesheet" type="text/css">
    <script src="/assets/js/timetable.js"></script>
@endif
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="/assets/media/logos/favicon.ico">
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
<!--end::Fonts-->
<!--begin::Page Vendor Stylesheets(used by this page)-->
<link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css">
<!--end::Page Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="/assets/plugins/global/plugins.dark.bundle.css" rel="stylesheet" type="text/css">
<link href="/assets/css/style.dark.bundle.css" rel="stylesheet" type="text/css">
<link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css">
