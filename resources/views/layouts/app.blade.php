<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Shop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between">
            <a href="{{ route('home') }}" class="text-lg font-bold">Shoe Shop</a>
            <ul class="flex gap-4">
                <li><a href="{{ route('home') }}" class="hover:text-blue-500">Home</a></li>
                <li><a href="{{ route('shop') }}" class="hover:text-blue-500">Shop</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-blue-500">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>