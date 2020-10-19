<!-- begin::Global Config(global config for global JS sciprts) -->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#591df1",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#dc3545"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>


<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="{{asset('assets/plugins/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets/plugins/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
<script src="{{asset("assets/plugins/general/sticky-js/dist/sticky.min.js")}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/general/wnumb/wNumb.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
<script>
    $(".alert").fadeTo(5000, 500).slideUp(500, function(){
        $(".alert").slideUp(500);
    });
</script>
@yield('javascript')


<script src="{{asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

</body>

<!-- end::Body -->
</html>
