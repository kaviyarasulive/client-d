<!DOCTYPE html>
<html>
    @include('user.layout.headerlink')
    <body class="hold-transition sidebar-mini skin-blue">
        <div class="wrapper">
            <!-- header -->
        <!-- color for side bar -->

            <!-- Nav Bar -->
            @include('user.layout.navbar')
            <!-- Content -->
                <div class="content-wrapper">
                    <section class="content">
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