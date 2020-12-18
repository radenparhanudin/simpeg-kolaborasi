<!DOCTYPE html>
<html>
    <head>
        @include('layouts.backend-app.head')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                @include('layouts.backend-app.main-header')
            </header>
            <aside class="main-sidebar">
                @include('layouts.backend-app.main-sidebar')
            </aside>
            <div class="content-wrapper">
                @yield('content-wrapper')
            </div>
            <footer class="main-footer">
                @include('layouts.backend-app.main-footer')
            </footer>
        </div>
        <!-- ./wrapper -->
        @include('layouts.backend-app.foot')
    </body>
</html>