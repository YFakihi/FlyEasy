<!-- layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css','resources/js/app.js'])
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


    <title>@yield('title', 'Your App')</title>



</head>
<body  >
    @include('layouts.nav')

    <div class="">
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>
