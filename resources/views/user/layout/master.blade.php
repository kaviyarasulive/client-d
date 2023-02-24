<!DOCTYPE html>
<html>
    @include('user.layout.headerScript')
    <body class="hold-transition sidebar-mini skin-blue">
        <div class="wrapper">
            <!-- header -->
            @include('user.layout.header')
        <!-- color for side bar -->

            <!-- Nav Bar -->
            @include('user.layout.navbar')
            <!-- Content -->
                <div class="content-wrapper">
                    <section class="content">
                        @include('errors')
                        @yield('content')

                    </section>
                </div>
            <!-- End Content -->

            <!-- Footer -->
            @include('user.layout.footer')
        <!-- End Footer -->
        </div>
    </body>
</html>