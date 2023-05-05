<!DOCTYPE html>
<html>
    @include('administration.layout.headerScript')
    <body class="hold-transition sidebar-mini skin-blue">
        <div class="wrapper">
            <!-- header -->
            @include('administration.layout.header')
        <!-- color for side bar -->

            <!-- Nav Bar -->
            @include('administration.layout.navbar')
            <!-- Content -->
                <div class="content-wrapper">
                    <section class="content">
                        @include('errors')
                        @yield('content')

                    </section>
                </div>
            <!-- End Content -->

            <!-- Footer -->
            @include('administration.layout.footer')
        <!-- End Footer -->
        </div>
    </body>
</html>