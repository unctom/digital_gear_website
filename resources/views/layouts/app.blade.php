<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-[#0D1224]">
    <div class="max-w-[25rem] sm:max-w-[40rem] lg:max-w-[60rem] flex flex-col mx-auto size-full overflow-x-hidden">
        <!-- ========== HEADER ========== -->
        <header class="mb-auto flex justify-center z-50 w-full py-4">
            <nav class="px-4 sm:px-6 lg:px-8" aria-label="Global">
                <a class="flex-none text-xl font-semibold sm:text-3xl text-[#D3D8E8] font-montserrat" href="{{route('home')}}"
                    aria-label="Brand">Digital Gear Junction</a>
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->
        <main id="content">
            @yield('content')
        </main>
        <!-- ========== FOOTER ========== -->
        <footer class="mt-auto text-center py-5">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-sm text-gray-500 font-poppins">DGJ © All Rights Reserved. 2024.</p>
            </div>
        </footer>
        <!-- ========== END FOOTER ========== -->
    </div>
</body>

</html>
