<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    
    {{-- form login --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> --}}

    <title>NusaJelajah | {{ $title }}</title>
    <style>
        section {
            padding: 60px 0;
        }
    </style>
</head>
<body>
    @include('frontend.templates.layouts.navbar')

    @yield('content')

    @include('frontend.templates.layouts.footer')

{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
{{-- JS form Login --}}
{{-- <script src="js/all.js"></script>
<script src="js/bootstrap.bundle.min.js"></script> --}}
</body>
</html>