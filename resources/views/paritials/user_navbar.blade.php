 <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-cube text-3xl text-blue-600"></i>
                    <span class="font-bold text-2xl gradient-text">ShopEase</span>
                </div>

                <div class="hidden md:flex flex-1 max-w-lg mx-8">
                    <div class="relative w-full">
                        <input type="text" placeholder="Search for products..." 
                               class="w-full px-4 py-2 pl-12 rounded-full border border-gray-200 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                        <i class="fa-solid fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <button class="relative p-2 hover:bg-gray-100 rounded-full transition-colors">
                        <i class="fa-solid fa-bell text-xl text-gray-600"></i>
                        <span class="absolute top-0 right-0 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center animate-pulse">3</span>
                    </button>
                    <button class="relative p-2 hover:bg-gray-100 rounded-full transition-colors">
                        <i class="fa-solid fa-heart text-xl text-gray-600"></i>
                        <span class="absolute top-0 right-0 w-5 h-5 bg-blue-500 text-white text-xs rounded-full flex items-center justify-center">5</span>
                    </button>
                    <button class="relative p-2 hover:bg-gray-100 rounded-full transition-colors">
                        <i class="fa-solid fa-shopping-cart text-xl text-gray-600"></i>
                        <span class="absolute top-0 right-0 w-5 h-5 bg-purple-500 text-white text-xs rounded-full flex items-center justify-center">2</span>
                    </button>
                    
                    <div class="relative" id="userMenu">
                        <button class="flex items-center space-x-2 p-1 rounded-full hover:bg-gray-100 transition-colors">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-10 h-10 rounded-full border-2 border-blue-500">
                            <span class="hidden md:block font-medium text-gray-700">John Doe</span>
                            <i class="fa-solid fa-chevron-down text-gray-400 text-xs hidden md:block"></i>
                        </button>
                        
                        <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-2xl border border-gray-100 z-50 animate-fade-in">
                            <div class="p-4 border-b border-gray-100">
                                <p class="font-semibold text-gray-800">John Doe</p>
                                <p class="text-xs text-gray-500">john.doe@email.com</p>
                            </div>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                <i class="fa-solid fa-user mr-2"></i> My Account
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                <i class="fa-solid fa-cog mr-2"></i> Settings
                            </a>
                            <div class="border-t border-gray-100"></div>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                <i class="fa-solid fa-sign-out-alt mr-2"></i> Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>