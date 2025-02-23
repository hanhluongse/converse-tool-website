<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converse Shoe Tool</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-white-100" x-data="{ 
    selectedShoe: null,
    selectedTab: 'STANDARD', 
    selectedSticker: null, 
    selectedShoe: 'all-star-hi'
}">
    @if(isset($showSteps) && $showSteps)
        @include('components.step-navigation', ['currentStep' => $currentStep ?? 1])
    @endif

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <!-- <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script> -->
</body>
</html>