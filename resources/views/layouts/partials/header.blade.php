<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>

    <!--end::Base Path -->
    <meta charset="utf-8"/>
    <title>TSA</title>
    <meta name="description" content="Send Invites">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Asap+Condensed:500"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/plugins/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/plugins/line-awesome/css/line-awesome.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/plugins/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/plugins/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/plugins/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css"/>

    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@yield('header')


<!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->

    <link href="{{asset('/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/css/custom_style.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    {{--    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.png')}}"/>--}}
    <style>
        .hidden {
            display: none
        }
    </style>
</head>

<!-- end::Head -->

