<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " style="background-color: white">
    <div class="kt-header-mobile__logo">
        <a href="{{url('/activities')}}">
            <img src="{{asset('/images/logo.png')}} " alt="logo"  style="width: 30%">
{{--            @if(isset($clientLogo)) <img width="150px" src="{{env('S3_ASSETS_BUCKET_URL')."client_logo/".$clientLogo}}" alt="Logo"> @endif--}}
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->
