<!DOCTYPE html>
<html lang="en">
    <head>
    @include('backend.includes.head')
    </head>
    
    <body class="sb-nav-fixed">
        <!--Top nav-->
        @include('backend.includes.nav')

        <div id="layoutSidenav">
            <!--Sidebar-->
            @include('backend.includes.sidebar')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @yield('main')
                    </div>
                </main>

                <!--Footer-->
                @include('backend.includes.footer')

            </div>
        </div>
        
        <!--Script-->
        @include('backend.includes.script')
    </body>
</html>
