<!DOCTYPE html>
<html lang="en">
    @include('backend.admin.inc.head')
    <body class="sb-nav-fixed">
        @include('backend.admin.inc.navbar')
        <div id="layoutSidenav">
            @include('backend.admin.inc.sidebar')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('backend.admin.inc.footer')
            </div>
        </div>
       @include('backend.admin.inc.js')
    </body>
</html>
