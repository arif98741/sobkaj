<!DOCTYPE html>
<html lang="en">
@include('admin.lib.header_css')
<body class="c-app">
@include('admin.lib.sidebar')
<div class="c-wrapper c-fixed-components">
    @include('admin.lib.header')
    <div class="c-body">
        <div class="c-main">
            @yield('content')
        </div>
    </div>
</div>
@include('admin.lib.footer_js')

</body>
</html>
