<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>
    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" /> --}}

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" /> --}}

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" /> --}}
    {{-- <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" /> --}}
    {{-- <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" /> --}}

    <!-- Page CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }} --}}

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <style>
        @font-face {
            font-family: 'Cairo';
            src: url({{ asset('assets/fonts/static/Cairo-Regular.ttf') }})
        }

        .modal-header {
            background: linear-gradient(45deg, #ff6b6b, #f06595);
            color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .modal-content {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        .text-shadow {
            text-shadow: 0px 4px 5px rgb(120 255 95 / 50%);
        }

        .modal-body {
            font-size: 1.1rem;
            color: #333;
        }

        .modal-footer {
            display: flex;
            justify-content: space-between;
        }


        .btn-close:hover {
            background: #ddd;
        }

        .btn-success,
        .btn-label-danger {
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .btn-success:hover {
            background: #28a745;
        }

        .btn-label-danger {
            background: #dc3545;
            color: #fff;
        }

        .btn-label-danger:hover {
            background: #c82333;
        }

        body {
            font-family: 'Cairo', sans-serif;
        }

        .rounded-image {
            width: 32px;
            /* تعديل حسب الحاجة */
            height: 32px;
            /* تعديل حسب الحاجة */
            border-radius: 50%;
            background-size: cover;
            background-position: center;
        }

        .rounded-nav-image {
            width: 85px;
            height: 56px;
            /* تعديل حسب الحاجة */
            border-radius: 50%;
            background-size: cover;
            background-position: center;
        }

        .rounded-user-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
        }
    </style>
    <style>
        @media print {

            #print_Button {
                display: none;
            }

            .manage-column {
                display: none;
            }

        }
    </style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr"></script>


<!-- Page CSS -->

</head>
