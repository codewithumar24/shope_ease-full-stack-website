  <aside id="sidebar" class="sidebar fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-2xl transform -translate-x-full lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center h-20 border-b border-gray-100 bg-gradient-to-r from-blue-600 to-purple-600">
                <div class="flex items-center space-x-3 animate-slide-left">
                    <i class="fa-solid fa-cube text-3xl text-white"></i>
                    <div>
                        <span class="text-2xl font-bold text-white">ShopEase</span>
                        <p class="text-xs text-blue-100">Admin Panel</p>
                    </div>
                </div>
            </div>

            <nav class="mt-6 px-4 space-y-2 overflow-y-auto h-[calc(100vh-5rem)] pb-20">
                
                <a href="{{route('dashboard')}}" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <i class="fa-solid fa-chart-line text-lg"></i>
                    <span class="font-medium">Dashboard</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-600 transition-all duration-300 group">
                    <i class="fa-solid fa-box text-lg group-hover:scale-110 transition-transform"></i>
                    <span class="font-medium">Products</span>
                    <span class="ml-auto bg-blue-100 text-blue-600 text-xs font-bold px-2 py-1 rounded-full">245</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-600 transition-all duration-300 group">
                    <i class="fa-solid fa-shopping-cart text-lg group-hover:scale-110 transition-transform"></i>
                    <span class="font-medium">Orders</span>
                    <span class="ml-auto bg-red-100 text-red-600 text-xs font-bold px-2 py-1 rounded-full animate-pulse">12 New</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-600 transition-all duration-300 group">
                    <i class="fa-solid fa-users text-lg group-hover:scale-110 transition-transform"></i>
                    <span class="font-medium">Customers</span>
                </a>

                <a href="{{route('category.home')}}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-600 transition-all duration-300 group">
                    <i class="fa-solid fa-tags text-lg group-hover:scale-110 transition-transform"></i>
                    <span class="font-medium">Categories</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-600 transition-all duration-300 group">
                    <i class="fa-solid fa-chart-pie text-lg group-hover:scale-110 transition-transform"></i>
                    <span class="font-medium">Analytics</span>
                </a>

                <div class="pt-4 pb-2">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Marketing</p>
                </div>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-600 transition-all duration-300 group">
                    <i class="fa-solid fa-bullhorn text-lg group-hover:scale-110 transition-transform"></i>
                    <span class="font-medium">Promotions</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-600 transition-all duration-300 group">
                    <i class="fa-solid fa-envelope text-lg group-hover:scale-110 transition-transform"></i>
                    <span class="font-medium">Newsletter</span>
                </a>

                <div class="pt-4 pb-2">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">System</p>
                </div>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-600 transition-all duration-300 group">
                    <i class="fa-solid fa-cog text-lg group-hover:rotate-90 transition-transform duration-500"></i>
                    <span class="font-medium">Settings</span>
                </a>

                <a href="{{route('logout')}}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gradient-to-r hover:from-red-50 hover:to-pink-50 hover:text-red-600 transition-all duration-300 group">
                    <i class="fa-solid fa-sign-out-alt text-lg group-hover:translate-x-1 transition-transform"></i>
                    <span class="font-medium">Logout</span>
                </a>
            </nav>
        </aside>