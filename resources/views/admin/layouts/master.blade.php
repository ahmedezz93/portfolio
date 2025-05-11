<!DOCTYPE html>


<html lang="{{ app()->getLocale() }}" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
    data-theme="theme-default" data-assets-path="/../../assets/" data-template="vertical-menu-template">

@include('admin.layouts.head')
@yield('css')

<body >
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('admin.layouts.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('admin.layouts.header')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                        @include('admin.layouts.modals')
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('admin.layouts.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @include('admin.layouts.footer-script')
    @yield('script')
</body>

</html>
