<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
</head>
<body class="c-app">
@include('layouts.sidebar')

<div class="c-wrapper c-fixed-components">
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</div>


<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>