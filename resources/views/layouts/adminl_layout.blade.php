<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('include.admin.headadmin')

</head>

<body>

    <div id="app">

      @include('include.admin.navadmin')

        <main class="">

            @yield('content')

        </main>

    </div>
   
</body>
</html>