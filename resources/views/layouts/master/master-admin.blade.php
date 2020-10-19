@include('layouts.partials.header')

<!-- begin::Body -->
<body
        class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed">

<!-- begin:: Page -->
@include('layouts.partials.navigation.mobile-header')
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
        @include('layouts.partials.navigation.nav-bar')
        <!-- end:: Header -->
            <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                <div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">
                    @include('layouts.partials.sidebar')
                    <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Content -->
                    @yield('content')
                    <!-- end:: Content -->
                    </div>
                </div>
            </div>
            @include('layouts.partials.footer')
        </div>
    </div>
</div>

<!-- end:: Page -->
@include('layouts.partials.end')

