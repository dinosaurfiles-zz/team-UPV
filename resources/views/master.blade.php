<html>
<head>
    <title> @yield('title')</title>

    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/bootstrap.theme.min.css') !!}">

    <!--
    <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    -->
    
</head>
<body>
    @include('shared.navbar')

    @yield('content')

    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>

</body>
</html>