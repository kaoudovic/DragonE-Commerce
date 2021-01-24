<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Algmden.com</title>
    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/new/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/new/css/mdb-pro.min.css')}}">
    <!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="{{asset('assets/new/css/mdb.ecommerce.min.css')}}">
    <style>
        @media (min-width: 1100px) {
            .container-xl {
                max-width: 1480px;
            }
        }

        .divider-new.version-2 {
            justify-content: left;
        }

        .divider-new.version-2:before {
            flex: 0;
        }
    </style>

</head>

<body class="skin-light">

<!-- Navbar -->
@include('layouts.header')

<div class="main">
@yield('content')


@include('layouts.footer')
<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('assets/new/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('assets/new/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('assets/new/js/mdb.min.js')}}"></script>
    <!-- MDB Ecommerce JavaScript -->
    <script type="text/javascript" src="{{asset('assets/new/js/mdb.ecommerce.min.js')}}"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
        $(function () {
            $('.material-tooltip-main').tooltip({
                template: '<div class="tooltip md-tooltip-main"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner-main"></div></div>'
            });
        });

        $(document).ready(function () {
            $('.mdb-select').materialSelect();
            $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
                $(this).closest('.select-outline').find('label').toggleClass('active');
                $(this).closest('.select-outline').find('.caret').toggleClass('active');
            });
        });
    </script>
</body>
</html>
