<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - ShopEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <link rel="stylesheet" href="{{asset('css/user_dashboard.css')}}">
</head>
<body class="bg-gray-50 text-gray-800">

   @include('paritials.user_navbar')
    <div class="max-w-7xl mx-auto px-4 py-8">
                <div class="mb-8 animate-slide-up">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Welcome back, John! 👋</h1>
                    <p class="text-gray-600">Here's what's happening with your account today.</p>
                </div>
                <div class="mt-4 md:mt-0 flex space-x-3">
                    <button class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full font-medium hover:shadow-lg transition-all transform hover:scale-105">
                        <i class="fa-solid fa-shopping-bag mr-2"></i>Continue Shopping
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            
          @include('paritials.user_sidebar')

           @yield('user-content')
        </div>
    </div>

    <div id="toast" class="toast fixed bottom-4 right-4 bg-gray-800 text-white px-6 py-3 rounded-lg shadow-2xl flex items-center space-x-3 z-50">
        <i class="fa-solid fa-check-circle text-green-400"></i>
        <span id="toastMessage">Operation successful!</span>
    </div>

 <script src="{{asset('js/user_dashboard.js')}}"></script>
</body>
</html>