<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopEase - Modern E-commerce Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body class="bg-gray-50 overflow-x-hidden">

@include('paritials.navbar')

<div class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center" id="searchModal">
    <div class="bg-white rounded-lg p-6 w-96 animate-slide-bottom">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold">Search Products</h3>
            <button id="closeSearchModal" class="text-gray-500 hover:text-gray-700">
                <i class="fa-solid fa-times text-2xl"></i>
            </button>
        </div>
        <div class="relative">
            <input type="text" placeholder="What are you looking for?" 
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all">
            <button class="absolute right-2 top-2 text-blue-600">
                <i class="fa-solid fa-search"></i>
            </button>
        </div>
    </div>
</div>

@yield('main-content')

@include('paritials.footer')

<script src ="{{asset('js/main.js')}}"></script>
</body>
</html>