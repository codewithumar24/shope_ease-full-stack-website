<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopEase Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <link rel="stylesheet" href="{{asset('css/admin_main.css')}}">
</head>
<body class="bg-gray-50 text-gray-800 overflow-x-hidden">

    <div id="loader" class="fixed inset-0 bg-white z-[9999] flex items-center justify-center transition-opacity duration-500">
        <div class="text-center">
            <div class="relative w-24 h-24 mb-4">
                <div class="absolute inset-0 border-4 border-blue-200 rounded-full"></div>
                <div class="absolute inset-0 border-4 border-blue-600 rounded-full border-t-transparent animate-spin"></div>
                <i class="fa-solid fa-cube absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-3xl text-blue-600"></i>
            </div>
            <p class="text-lg font-semibold gradient-text animate-pulse">Loading Dashboard...</p>
        </div>
    </div>

    <div class="flex h-screen overflow-hidden">
        @include('paritials.admin_sidebar')
      

        <div class="flex-1 flex flex-col overflow-hidden relative">
            
            @include('paritials.admin_navbar')

           @yield('admin-content')
        </div>
    </div>

   <script src="{{asset('js/admin_main.js')}}"></script>
</body>
</html>