  <aside class="lg:w-64 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-4 sticky top-24 animate-slide-left">
                    
                    <div class="text-center pb-6 border-b border-gray-100 mb-4">
                        <div class="relative inline-block">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-20 h-20 rounded-full mx-auto border-4 border-blue-100">
                            <div class="absolute bottom-0 right-0 w-6 h-6 bg-green-500 border-2 border-white rounded-full"></div>
                        </div>
                        <h3 class="font-bold text-gray-800 mt-3">John Doe</h3>
                        <p class="text-sm text-gray-500">Premium Member</p>
                        <div class="mt-3 flex justify-center space-x-1">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                        </div>
                    </div>

                    <nav class="space-y-2">
                        <button onclick="switchTab('dashboard')" class="tab-btn w-full flex items-center space-x-3 px-4 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg transition-all transform hover:scale-105" data-tab="dashboard">
                            <i class="fa-solid fa-th-large"></i>
                            <span class="font-medium">Dashboard</span>
                        </button>
                        
                        <button onclick="switchTab('orders')" class="tab-btn w-full flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-all" data-tab="orders">
                            <i class="fa-solid fa-box"></i>
                            <span class="font-medium">My Orders</span>
                            <span class="ml-auto bg-blue-100 text-blue-600 text-xs font-bold px-2 py-1 rounded-full">5</span>
                        </button>
                        
                        <button onclick="switchTab('wishlist')" class="tab-btn w-full flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-all" data-tab="wishlist">
                            <i class="fa-solid fa-heart"></i>
                            <span class="font-medium">Wishlist</span>
                            <span class="ml-auto bg-pink-100 text-pink-600 text-xs font-bold px-2 py-1 rounded-full">12</span>
                        </button>
                        
                        <button onclick="switchTab('addresses')" class="tab-btn w-full flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-all" data-tab="addresses">
                            <i class="fa-solid fa-map-marker-alt"></i>
                            <span class="font-medium">Addresses</span>
                        </button>
                        
                        <button onclick="switchTab('payments')" class="tab-btn w-full flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-all" data-tab="payments">
                            <i class="fa-solid fa-credit-card"></i>
                            <span class="font-medium">Payment Methods</span>
                        </button>
                        
                        <button onclick="switchTab('reviews')" class="tab-btn w-full flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-all" data-tab="reviews">
                            <i class="fa-solid fa-star"></i>
                            <span class="font-medium">My Reviews</span>
                        </button>
                        
                        <button onclick="switchTab('settings')" class="tab-btn w-full flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-all" data-tab="settings">
                            <i class="fa-solid fa-cog"></i>
                            <span class="font-medium">Settings</span>
                        </button>
                    </nav>

                    <div class="mt-6 p-4 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl text-white text-center">
                        <i class="fa-solid fa-crown text-3xl mb-2 animate-float"></i>
                        <h4 class="font-bold">Gold Member</h4>
                        <p class="text-xs text-blue-100 mt-1">Valid until Dec 2024</p>
                        <div class="mt-3 bg-white/20 rounded-full h-2 overflow-hidden">
                            <div class="bg-white h-full rounded-full" style="width: 75%"></div>
                        </div>
                        <p class="text-xs mt-2">750/1000 points to Platinum</p>
                    </div>
                </div>
            </aside>