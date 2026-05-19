<header class="bg-white shadow-sm sticky top-0 z-40">
                <div class="flex items-center justify-between px-6 py-4">
                    
                    <div class="flex items-center space-x-4">
                        <button id="sidebarToggle" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                            <i class="fa-solid fa-bars text-xl text-gray-600"></i>
                        </button>
                        
                        <nav class="hidden md:flex items-center space-x-2 text-sm text-gray-500">
                            <span class="hover:text-blue-600 cursor-pointer transition-colors">Home</span>
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                            <span class="text-blue-600 font-medium">Dashboard</span>
                        </nav>
                    </div>

                    <div class="flex items-center space-x-4">
                        
                        <div class="hidden md:flex items-center bg-gray-100 rounded-full px-4 py-2 focus-within:ring-2 focus-within:ring-blue-500 transition-all duration-300 w-64">
                            <i class="fa-solid fa-search text-gray-400"></i>
                            <input type="text" placeholder="Search anything..." class="bg-transparent border-none outline-none ml-2 w-full text-sm">
                        </div>

                        <div class="relative">
                            <button id="notificationBtn" class="p-2 rounded-full hover:bg-gray-100 transition-all duration-300 relative hover:scale-110">
                                <i class="fa-solid fa-bell text-xl text-gray-600"></i>
                                <span class="absolute top-0 right-0 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center notification-badge">5</span>
                            </button>
                            
                            <div id="notificationDropdown" class="dropdown-menu hidden absolute right-0 mt-2 w-80 bg-white rounded-xl shadow-2xl border border-gray-100 overflow-hidden z-50">
                                <div class="p-4 border-b border-gray-100 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
                                    <h3 class="font-semibold">Notifications</h3>
                                    <p class="text-xs text-blue-100 mt-1">You have 5 unread messages</p>
                                </div>
                                <div class="max-h-64 overflow-y-auto">
                                    <div class="p-4 hover:bg-gray-50 cursor-pointer transition-colors border-l-4 border-blue-500">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                                <i class="fa-solid fa-shopping-bag text-blue-600"></i>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-gray-800">New Order #1234</p>
                                                <p class="text-xs text-gray-500 mt-1">2 minutes ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 hover:bg-gray-50 cursor-pointer transition-colors border-l-4 border-purple-500">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">
                                                <i class="fa-solid fa-user-plus text-purple-600"></i>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-gray-800">New Customer Registered</p>
                                                <p class="text-xs text-gray-500 mt-1">15 minutes ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 hover:bg-gray-50 cursor-pointer transition-colors border-l-4 border-green-500">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                                                <i class="fa-solid fa-check text-green-600"></i>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-gray-800">Product Approved</p>
                                                <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-t border-gray-100 text-center">
                                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium transition-colors">View All Notifications</a>
                                </div>
                            </div>
                        </div>

                        <button class="p-2 rounded-full hover:bg-gray-100 transition-all duration-300 relative hover:scale-110 hidden md:block">
                            <i class="fa-solid fa-envelope text-xl text-gray-600"></i>
                            <span class="absolute top-0 right-0 w-5 h-5 bg-blue-500 text-white text-xs rounded-full flex items-center justify-center">3</span>
                        </button>

                        <div class="relative">
                            <button id="profileBtn" class="flex items-center space-x-3 p-2 rounded-full hover:bg-gray-100 transition-all duration-300">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin" class="w-10 h-10 rounded-full border-2 border-blue-500">
                                <div class="hidden md:block text-left">
                                    <p class="text-sm font-semibold text-gray-800">John Doe</p>
                                    <p class="text-xs text-gray-500">Super Admin</p>
                                </div>
                                <i class="fa-solid fa-chevron-down text-gray-400 text-xs hidden md:block"></i>
                            </button>

                            <div id="profileDropdown" class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-2xl border border-gray-100 z-50">
                                <div class="p-4 border-b border-gray-100">
                                    <p class="font-semibold text-gray-800">John Doe</p>
                                    <p class="text-xs text-gray-500">john@shopease.com</p>
                                </div>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <i class="fa-solid fa-user mr-2"></i> Profile
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
            </header>