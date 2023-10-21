<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/basic-style.css') }}">
</head>

<body>
@include('site.layouts._partials.top')
@yield('content') {{-- indica qual sessão será impressa --}}
</body>

</html>
