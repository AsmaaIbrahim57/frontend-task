<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
<head>
 @include('partials.header')
</head>
<body>
<div id="app">

    <main class="py-3">

        <router-view></router-view>
    </main>
</div>
</body>
</html>
