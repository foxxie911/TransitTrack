<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" id="favicon" href="{{asset('img/favicon.png')}}" type="image/gif" sizes="16x16">
    <title>TransitTrack</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<x-navbar>
</x-navbar>

<body>
    {{$slot}}
</body>

</html>