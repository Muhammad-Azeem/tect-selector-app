<!-- begin:: Aside -->
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
    <!-- begin:: Aside Menu -->
    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="kt-aside-menu kt-scroll ps ps--active-y" data-ktmenu-vertical="1"
             data-ktmenu-scroll="1">
            <ul class="kt-menu__nav">
                <li class="kt-menu__item {{ ((Request::segment(1) == 'dashboard')||Request::segment(1) == 'customer_dashboard'||Request::segment(1) == 'monitor_dashboard') ? 'kt-menu__item--active' : '' }}"
                    aria-haspopup="true"><a href="/activities" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon-dashboard"></i><span class="kt-menu__link-text">Activities</span></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- end:: Aside Menu -->
</div>

<!-- end:: Aside -->
