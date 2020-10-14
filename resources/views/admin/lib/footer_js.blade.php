<!-- CoreUI and necessary plugins-->
<script src="{{ asset('assets/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
<!--[if IE]><!-->
<script src="{{ asset('assets/admin/vendors/@coreui/icons/js/svgxuse.min.js')}}"></script>
<!--<![endif]-->
<!-- Plugins and scripts required by this view-->
<script src="{{ asset('assets/admin/vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js')}}"></script>
<script src="{{ asset('assets/admin/vendors/@coreui/utils/js/coreui-utils.js')}}"></script>
<script src="{{ asset('assets/admin/js/main.js')}}"></script>
@stack('extra-js')
