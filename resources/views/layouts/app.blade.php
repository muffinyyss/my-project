<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ADM | @yield('title')</title>

    <!-- Vendor CSS -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Gentelella Custom CSS -->
    <link href="{{ asset('gentelella/css/custom.min.css') }}" rel="stylesheet">


    <link rel="icon" type="image/png" href="{{ asset('images/adm-r.png') }}">



</head>

<body class="nav-md">

    {{-- <div class="container body"> --}}
        {{-- <div class="main_container"> --}}

            <!-- Sidebar -->
            {{-- @include('layouts.sidebar') เรียกใช้งาน Sidebar ที่แยกไว้ --}}

            <!-- Content -->
            <div class="right_col" role="main">
                @yield('content') {{-- เนื้อหาของแต่ละหน้าจะถูกแทรกตรงนี้ --}}
            </div>

            {{--
        </div> --}}
        {{-- </div> --}}

    <!-- JS (ถ้าจำเป็น) -->
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('gentelella/js/custom.min.js') }}"></script>

</body>

</html>
