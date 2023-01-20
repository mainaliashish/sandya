<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @section('meta_elements')
    @show
    <title>{{ $title ?? 'Sandiya' }}</title>
    @include('frontend/partials/_header')
    @section('headerElements')
    @show
</head>
<body>
    @include('frontend/partials/_navbar')
    @section('main-content')
    @show
    @include('frontend/partials/_footer')
    @section('footerElements')
    @show
</html>
