@extends('layouts.user_dashboard')

@section('user-content')
     <main class="flex-1">
                
                <div id="dashboard" class="tab-content active">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="bg-white rounded-2xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 0.1s">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                                    <i class="fa-solid fa-shopping-bag text-blue-600 text-xl"></i>
                                </div>
                                <span class="text-green-500 text-sm font-semibold">+2 this week</span>
                            </div>
                            <h3 class="text-gray-500 text-sm">Total Orders</h3>
                            <p class="text-2xl font-bold text-gray-800">24</p>
                        </div>

                        <div class="bg-white rounded-2xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 0.2s">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                                    <i class="fa-solid fa-truck text-purple-600 text-xl"></i>
                                </div>
                                <span class="text-blue-500 text-sm font-semibold">On the way</span>
                            </div>
                            <h3 class="text-gray-500 text-sm">Active Orders</h3>
                            <p class="text-2xl font-bold text-gray-800">3</p>
                        </div>

                        <div class="bg-white rounded-2xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 0.3s">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-pink-100 flex items-center justify-center">
                                    <i class="fa-solid fa-heart text-pink-600 text-xl"></i>
                                </div>
                                <span class="text-pink-500 text-sm font-semibold">Saved</span>
                            </div>
                            <h3 class="text-gray-500 text-sm">Wishlist Items</h3>
                            <p class="text-2xl font-bold text-gray-800">12</p>
                        </div>

                        <div class="bg-white rounded-2xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 0.4s">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center">
                                    <i class="fa-solid fa-star text-amber-600 text-xl"></i>
                                </div>
                                <span class="text-amber-500 text-sm font-semibold">Reviews</span>
                            </div>
                            <h3 class="text-gray-500 text-sm">My Reviews</h3>
                            <p class="text-2xl font-bold text-gray-800">8</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                        
                        <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg p-6 animate-slide-up" style="animation-delay: 0.5s">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-bold text-gray-800">Recent Orders</h3>
                                <button onclick="switchTab('orders')" class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors">View All</button>
                            </div>
                            
                            <div class="space-y-4">
                                <div class="flex items-center p-4 bg-gray-50 rounded-xl hover:bg-blue-50 transition-colors cursor-pointer group">
                                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=100&h=100&fit=crop" class="w-16 h-16 rounded-lg object-cover group-hover:scale-110 transition-transform" alt="Product">
                                    <div class="ml-4 flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="font-semibold text-gray-800">Premium Wireless Headphones</h4>
                                            <span class="text-lg font-bold text-blue-600">$299.99</span>
                                        </div>
                                        <p class="text-sm text-gray-500 mb-2">Order #ORD-7782 • Oct 24, 2024</p>
                                        <div class="flex items-center space-x-4">
                                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Delivered</span>
                                            <span class="text-xs text-gray-400">2 items</span>
                                        </div>
                                    </div>
                                    <button class="ml-4 w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center text-gray-400 hover:text-blue-600 hover:shadow-lg transition-all">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>

                                <div class="flex items-center p-4 bg-gray-50 rounded-xl hover:bg-blue-50 transition-colors cursor-pointer group">
                                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=100&h=100&fit=crop" class="w-16 h-16 rounded-lg object-cover group-hover:scale-110 transition-transform" alt="Product">
                                    <div class="ml-4 flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="font-semibold text-gray-800">Smart Watch Series 7</h4>
                                            <span class="text-lg font-bold text-blue-600">$399.99</span>
                                        </div>
                                        <p class="text-sm text-gray-500 mb-2">Order #ORD-7780 • Oct 22, 2024</p>
                                        <div class="flex items-center space-x-4">
                                            <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">In Transit</span>
                                            <span class="text-xs text-gray-400">1 item</span>
                                        </div>
                                    </div>
                                    <button class="ml-4 w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center text-gray-400 hover:text-blue-600 hover:shadow-lg transition-all">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>

                                <div class="flex items-center p-4 bg-gray-50 rounded-xl hover:bg-blue-50 transition-colors cursor-pointer group">
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=100&h=100&fit=crop" class="w-16 h-16 rounded-lg object-cover group-hover:scale-110 transition-transform" alt="Product">
                                    <div class="ml-4 flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="font-semibold text-gray-800">Nike Air Max Running Shoes</h4>
                                            <span class="text-lg font-bold text-blue-600">$149.99</span>
                                        </div>
                                        <p class="text-sm text-gray-500 mb-2">Order #ORD-7775 • Oct 20, 2024</p>
                                        <div class="flex items-center space-x-4">
                                            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">Processing</span>
                                            <span class="text-xs text-gray-400">1 item</span>
                                        </div>
                                    </div>
                                    <button class="ml-4 w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center text-gray-400 hover:text-blue-600 hover:shadow-lg transition-all">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl shadow-lg p-6 animate-slide-up" style="animation-delay: 0.6s">
                            <h3 class="text-lg font-bold text-gray-800 mb-6">Track Order #ORD-7780</h3>
                            
                            <div class="relative pl-4">
                                <div class="timeline-line"></div>
                                
                                <div class="relative flex items-start mb-8">
                                    <div class="timeline-dot active w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center flex-shrink-0 mr-4">
                                        <i class="fa-solid fa-check text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Order Placed</h4>
                                        <p class="text-sm text-gray-500">Oct 22, 2024 at 2:30 PM</p>
                                        <p class="text-xs text-blue-600 mt-1">Your order has been confirmed</p>
                                    </div>
                                </div>

                                <div class="relative flex items-start mb-8">
                                    <div class="timeline-dot active w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center flex-shrink-0 mr-4">
                                        <i class="fa-solid fa-box text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Processing</h4>
                                        <p class="text-sm text-gray-500">Oct 23, 2024 at 9:00 AM</p>
                                        <p class="text-xs text-blue-600 mt-1">Your order is being prepared</p>
                                    </div>
                                </div>

                                <div class="relative flex items-start mb-8">
                                    <div class="timeline-dot active w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center flex-shrink-0 mr-4">
                                        <i class="fa-solid fa-shipping-fast text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Shipped</h4>
                                        <p class="text-sm text-gray-500">Oct 24, 2024 at 4:15 PM</p>
                                        <p class="text-xs text-blue-600 mt-1">Out for delivery</p>
                                    </div>
                                </div>

                                <div class="relative flex items-start">
                                    <div class="timeline-dot w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0 mr-4">
                                        <i class="fa-solid fa-home text-gray-400"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-400">Delivered</h4>
                                        <p class="text-sm text-gray-400">Expected by Oct 26, 2024</p>
                                    </div>
                                </div>
                            </div>

                            <button class="w-full mt-6 py-3 border-2 border-blue-600 text-blue-600 rounded-xl font-semibold hover:bg-blue-600 hover:text-white transition-all">
                                View Details
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg p-6 animate-slide-up" style="animation-delay: 0.7s">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Recommended For You</h3>
                                <p class="text-sm text-gray-500">Based on your purchase history</p>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View All</a>
                        </div>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="product-card bg-gray-50 rounded-xl overflow-hidden group cursor-pointer">
                                <div class="relative overflow-hidden h-48">
                                    <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?w=400&h=400&fit=crop" class="product-image w-full h-full object-cover" alt="Product">
                                    <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center text-gray-400 hover:text-red-500 transition-colors heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all flex items-center justify-center opacity-0 group-hover:opacity-100">
                                        <button class="bg-white text-blue-600 px-4 py-2 rounded-full font-semibold transform translate-y-4 group-hover:translate-y-0 transition-transform">
                                            Quick View
                                        </button>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-gray-800 mb-1">Leather Crossbody Bag</h4>
                                    <div class="flex items-center mb-2">
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star-half-alt text-yellow-400 text-xs"></i>
                                        <span class="text-xs text-gray-500 ml-1">(4.5)</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold text-blue-600">$89.99</span>
                                        <button class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="product-card bg-gray-50 rounded-xl overflow-hidden group cursor-pointer">
                                <div class="relative overflow-hidden h-48">
                                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=400&h=400&fit=crop" class="product-image w-full h-full object-cover" alt="Product">
                                    <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center text-gray-400 hover:text-red-500 transition-colors heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="absolute bottom-3 left-3 bg-red-500 text-white text-xs px-2 py-1 rounded">-20%</div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-gray-800 mb-1">Polaroid Instant Camera</h4>
                                    <div class="flex items-center mb-2">
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <span class="text-xs text-gray-500 ml-1">(5.0)</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <span class="text-lg font-bold text-blue-600">$119.99</span>
                                            <span class="text-sm text-gray-400 line-through ml-1">$149.99</span>
                                        </div>
                                        <button class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="product-card bg-gray-50 rounded-xl overflow-hidden group cursor-pointer">
                                <div class="relative overflow-hidden h-48">
                                    <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400&h=400&fit=crop" class="product-image w-full h-full object-cover" alt="Product">
                                    <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center text-gray-400 hover:text-red-500 transition-colors heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-gray-800 mb-1">Classic Sunglasses</h4>
                                    <div class="flex items-center mb-2">
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-regular fa-star text-yellow-400 text-xs"></i>
                                        <span class="text-xs text-gray-500 ml-1">(4.0)</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold text-blue-600">$59.99</span>
                                        <button class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="product-card bg-gray-50 rounded-xl overflow-hidden group cursor-pointer">
                                <div class="relative overflow-hidden h-48">
                                    <img src="https://images.unsplash.com/photo-1594938298603-c8148c4dae35?w=400&h=400&fit=crop" class="product-image w-full h-full object-cover" alt="Product">
                                    <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center text-gray-400 hover:text-red-500 transition-colors heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="absolute bottom-3 left-3 bg-green-500 text-white text-xs px-2 py-1 rounded">New</div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-gray-800 mb-1">Minimalist Watch</h4>
                                    <div class="flex items-center mb-2">
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                        <span class="text-xs text-gray-500 ml-1">(4.8)</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold text-blue-600">$129.99</span>
                                        <button class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="orders" class="tab-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 animate-slide-up">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">My Orders</h3>
                                <p class="text-sm text-gray-500">View and track all your orders</p>
                            </div>
                            
                            <div class="flex flex-wrap gap-2">
                                <button class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm font-medium transition-all">All Orders</button>
                                <button class="px-4 py-2 bg-gray-100 text-gray-600 rounded-full text-sm font-medium hover:bg-blue-50 hover:text-blue-600 transition-all">Processing</button>
                                <button class="px-4 py-2 bg-gray-100 text-gray-600 rounded-full text-sm font-medium hover:bg-blue-50 hover:text-blue-600 transition-all">Shipped</button>
                                <button class="px-4 py-2 bg-gray-100 text-gray-600 rounded-full text-sm font-medium hover:bg-blue-50 hover:text-blue-600 transition-all">Delivered</button>
                                <button class="px-4 py-2 bg-gray-100 text-gray-600 rounded-full text-sm font-medium hover:bg-blue-50 hover:text-blue-600 transition-all">Cancelled</button>
                            </div>
                        </div>

                        <div class="relative mb-6">
                            <input type="text" placeholder="Search by order ID or product name..." 
                                   class="w-full px-4 py-3 pl-12 rounded-xl border border-gray-200 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                            <i class="fa-solid fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>

                        <div class="space-y-4">
                            <div class="border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all">
                                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4 pb-4 border-b border-gray-100">
                                    <div class="flex items-center space-x-4 mb-4 md:mb-0">
                                        <div>
                                            <p class="text-sm text-gray-500">Order ID</p>
                                            <p class="font-bold text-gray-800">#ORD-7782</p>
                                        </div>
                                        <div class="h-8 w-px bg-gray-200"></div>
                                        <div>
                                            <p class="text-sm text-gray-500">Order Date</p>
                                            <p class="font-medium text-gray-800">Oct 24, 2024</p>
                                        </div>
                                        <div class="h-8 w-px bg-gray-200"></div>
                                        <div>
                                            <p class="text-sm text-gray-500">Total Amount</p>
                                            <p class="font-bold text-blue-600">$299.99</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold">Delivered</span>
                                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">Invoice</button>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=150&h=150&fit=crop" class="w-24 h-24 rounded-lg object-cover" alt="Product">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 mb-1">Premium Wireless Headphones</h4>
                                        <p class="text-sm text-gray-500 mb-2">Color: Black | Qty: 1</p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="text-gray-600"><i class="fa-solid fa-truck mr-1"></i> Delivered on Oct 26, 2024</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-2">
                                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">Buy Again</button>
                                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">Track Order</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all">
                                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4 pb-4 border-b border-gray-100">
                                    <div class="flex items-center space-x-4 mb-4 md:mb-0">
                                        <div>
                                            <p class="text-sm text-gray-500">Order ID</p>
                                            <p class="font-bold text-gray-800">#ORD-7780</p>
                                        </div>
                                        <div class="h-8 w-px bg-gray-200"></div>
                                        <div>
                                            <p class="text-sm text-gray-500">Order Date</p>
                                            <p class="font-medium text-gray-800">Oct 22, 2024</p>
                                        </div>
                                        <div class="h-8 w-px bg-gray-200"></div>
                                        <div>
                                            <p class="text-sm text-gray-500">Total Amount</p>
                                            <p class="font-bold text-blue-600">$399.99</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">In Transit</span>
                                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">Invoice</button>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=150&h=150&fit=crop" class="w-24 h-24 rounded-lg object-cover" alt="Product">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 mb-1">Smart Watch Series 7</h4>
                                        <p class="text-sm text-gray-500 mb-2">Color: Midnight | Qty: 1</p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="text-blue-600"><i class="fa-solid fa-truck mr-1"></i> Expected by Oct 26, 2024</span>
                                        </div>
                                        <div class="mt-3 bg-gray-100 rounded-full h-2 overflow-hidden">
                                            <div class="bg-gradient-to-r from-blue-500 to-purple-500 h-full rounded-full" style="width: 75%"></div>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">Out for delivery</p>
                                    </div>
                                    <div class="flex flex-col space-y-2">
                                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">Track Order</button>
                                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">Cancel</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all">
                                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4 pb-4 border-b border-gray-100">
                                    <div class="flex items-center space-x-4 mb-4 md:mb-0">
                                        <div>
                                            <p class="text-sm text-gray-500">Order ID</p>
                                            <p class="font-bold text-gray-800">#ORD-7775</p>
                                        </div>
                                        <div class="h-8 w-px bg-gray-200"></div>
                                        <div>
                                            <p class="text-sm text-gray-500">Order Date</p>
                                            <p class="font-medium text-gray-800">Oct 20, 2024</p>
                                        </div>
                                        <div class="h-8 w-px bg-gray-200"></div>
                                        <div>
                                            <p class="text-sm text-gray-500">Total Amount</p>
                                            <p class="font-bold text-blue-600">$149.99</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold">Processing</span>
                                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">Invoice</button>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=150&h=150&fit=crop" class="w-24 h-24 rounded-lg object-cover" alt="Product">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 mb-1">Nike Air Max Running Shoes</h4>
                                        <p class="text-sm text-gray-500 mb-2">Size: US 10 | Color: Red | Qty: 1</p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="text-purple-600"><i class="fa-solid fa-box mr-1"></i> Being prepared</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-2">
                                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">Cancel Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mt-8 space-x-2">
                            <button class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button class="w-10 h-10 rounded-lg bg-blue-600 text-white flex items-center justify-center">1</button>
                            <button class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-50 transition-colors">2</button>
                            <button class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-50 transition-colors">3</button>
                            <button class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="wishlist" class="tab-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 animate-slide-up">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">My Wishlist</h3>
                                <p class="text-sm text-gray-500">12 items saved for later</p>
                            </div>
                            <button class="px-4 py-2 border border-red-500 text-red-500 rounded-lg text-sm font-medium hover:bg-red-50 transition-colors">
                                <i class="fa-solid fa-trash mr-2"></i>Clear All
                            </button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="border border-gray-200 rounded-xl p-4 hover:shadow-lg transition-all group">
                                <div class="relative mb-4">
                                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=400&fit=crop" class="w-full h-48 object-cover rounded-lg" alt="Product">
                                    <button class="absolute top-2 right-2 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center text-red-500 heart-icon liked">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="absolute bottom-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">-20%</div>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-1">Premium Wireless Headphones</h4>
                                <div class="flex items-center mb-2">
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-500 ml-1">(128)</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <span class="text-lg font-bold text-blue-600">$79.99</span>
                                        <span class="text-sm text-gray-400 line-through ml-1">$99.99</span>
                                    </div>
                                    <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded">In Stock</span>
                                </div>
                                <button class="w-full py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>

                            <div class="border border-gray-200 rounded-xl p-4 hover:shadow-lg transition-all group">
                                <div class="relative mb-4">
                                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=400&fit=crop" class="w-full h-48 object-cover rounded-lg" alt="Product">
                                    <button class="absolute top-2 right-2 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center text-red-500 heart-icon liked">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-1">Smart Watch Series 7</h4>
                                <div class="flex items-center mb-2">
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star-half-alt text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-500 ml-1">(86)</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-lg font-bold text-blue-600">$399.99</span>
                                    <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded">In Stock</span>
                                </div>
                                <button class="w-full py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>

                            <div class="border border-gray-200 rounded-xl p-4 hover:shadow-lg transition-all group">
                                <div class="relative mb-4">
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop" class="w-full h-48 object-cover rounded-lg" alt="Product">
                                    <button class="absolute top-2 right-2 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center text-red-500 heart-icon liked">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="absolute bottom-2 left-2 bg-amber-500 text-white text-xs px-2 py-1 rounded">Low Stock</div>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-1">Nike Air Max Shoes</h4>
                                <div class="flex items-center mb-2">
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <i class="fa-regular fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-500 ml-1">(42)</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-lg font-bold text-blue-600">$149.99</span>
                                    <span class="text-xs text-amber-600 bg-amber-100 px-2 py-1 rounded">Only 3 left</span>
                                </div>
                                <button class="w-full py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="addresses" class="tab-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 animate-slide-up">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">My Addresses</h3>
                                <p class="text-sm text-gray-500">Manage your delivery addresses</p>
                            </div>
                            <button class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full font-medium hover:shadow-lg transition-all transform hover:scale-105">
                                <i class="fa-solid fa-plus mr-2"></i>Add New Address
                            </button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="address-card selected border-2 border-blue-500 rounded-xl p-6 relative">
                                <div class="absolute top-4 right-4 flex space-x-2">
                                    <button class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center hover:bg-blue-200 transition-colors">
                                        <i class="fa-solid fa-pen text-sm"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center hover:bg-red-200 transition-colors">
                                        <i class="fa-solid fa-trash text-sm"></i>
                                    </button>
                                </div>
                                <div class="flex items-start space-x-3 mb-4">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                        <i class="fa-solid fa-home text-blue-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Home</h4>
                                        <span class="inline-block mt-1 px-2 py-0.5 bg-blue-100 text-blue-600 text-xs rounded-full">Default</span>
                                    </div>
                                </div>
                                <div class="space-y-1 text-sm text-gray-600">
                                    <p class="font-medium text-gray-800">John Doe</p>
                                    <p>123 Main Street, Apt 4B</p>
                                    <p>New York, NY 10001</p>
                                    <p>United States</p>
                                    <p class="pt-2"><i class="fa-solid fa-phone mr-2 text-gray-400"></i>+1 (555) 123-4567</p>
                                </div>
                            </div>

                            <div class="address-card border-2 border-gray-200 rounded-xl p-6 relative hover:border-blue-300">
                                <div class="absolute top-4 right-4 flex space-x-2">
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center hover:bg-blue-100 hover:text-blue-600 transition-colors">
                                        <i class="fa-solid fa-pen text-sm"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center hover:bg-red-100 hover:text-red-600 transition-colors">
                                        <i class="fa-solid fa-trash text-sm"></i>
                                    </button>
                                </div>
                                <div class="flex items-start space-x-3 mb-4">
                                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">
                                        <i class="fa-solid fa-briefcase text-purple-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Office</h4>
                                    </div>
                                </div>
                                <div class="space-y-1 text-sm text-gray-600">
                                    <p class="font-medium text-gray-800">John Doe</p>
                                    <p>456 Business Ave, Floor 12</p>
                                    <p>New York, NY 10018</p>
                                    <p>United States</p>
                                    <p class="pt-2"><i class="fa-solid fa-phone mr-2 text-gray-400"></i>+1 (555) 987-6543</p>
                                </div>
                                <button class="mt-4 text-sm text-blue-600 hover:text-blue-800 font-medium transition-colors">
                                    Set as Default
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="payments" class="tab-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 animate-slide-up">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Payment Methods</h3>
                                <p class="text-sm text-gray-500">Manage your payment options</p>
                            </div>
                            <button class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full font-medium hover:shadow-lg transition-all transform hover:scale-105">
                                <i class="fa-solid fa-plus mr-2"></i>Add Payment Method
                            </button>
                        </div>

                        <div class="space-y-4">
                            <div class="border-2 border-blue-500 rounded-xl p-6 bg-gradient-to-r from-blue-50 to-purple-50 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-20 rounded-full -mr-10 -mt-10"></div>
                                <div class="relative z-10 flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-16 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center text-white font-bold text-xs">
                                            VISA
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-800">Visa ending in 4242</p>
                                            <p class="text-sm text-gray-500">Expires 12/25</p>
                                            <span class="inline-block mt-1 px-2 py-0.5 bg-blue-100 text-blue-600 text-xs rounded-full">Default</span>
                                        </div>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm hover:bg-white transition-colors">Edit</button>
                                        <button class="px-4 py-2 border border-red-300 text-red-600 rounded-lg text-sm hover:bg-red-50 transition-colors">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-xl p-6 hover:border-blue-300 transition-all">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-16 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-white font-bold text-xs">
                                            <i class="fa-brands fa-cc-mastercard text-2xl"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-800">Mastercard ending in 8888</p>
                                            <p class="text-sm text-gray-500">Expires 08/26</p>
                                        </div>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm hover:bg-gray-50 transition-colors">Set Default</button>
                                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm hover:bg-gray-50 transition-colors">Edit</button>
                                        <button class="px-4 py-2 border border-red-300 text-red-600 rounded-lg text-sm hover:bg-red-50 transition-colors">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-xl p-6 hover:border-blue-300 transition-all">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-16 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold text-xs">
                                            <i class="fa-brands fa-paypal text-2xl"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-800">PayPal</p>
                                            <p class="text-sm text-gray-500">john.doe@email.com</p>
                                        </div>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm hover:bg-gray-50 transition-colors">Set Default</button>
                                        <button class="px-4 py-2 border border-red-300 text-red-600 rounded-lg text-sm hover:bg-red-50 transition-colors">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 p-4 bg-green-50 border border-green-200 rounded-xl flex items-start space-x-3">
                            <i class="fa-solid fa-shield-alt text-green-600 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-green-800">Your payments are secure</h4>
                                <p class="text-sm text-green-600 mt-1">We use industry-standard encryption to protect your payment information. Your card details are never stored on our servers.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="reviews" class="tab-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 animate-slide-up">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">My Reviews</h3>
                                <p class="text-sm text-gray-500">Products you've reviewed</p>
                            </div>
                            <div class="flex items-center space-x-2 text-sm text-gray-600">
                                <span>Average Rating:</span>
                                <div class="flex items-center space-x-1">
                                    <i class="fa-solid fa-star text-yellow-400"></i>
                                    <span class="font-bold text-gray-800">4.5</span>
                                </div>
                                <span>(8 reviews)</span>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all">
                                <div class="flex items-start space-x-4">
                                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=150&h=150&fit=crop" class="w-24 h-24 rounded-lg object-cover" alt="Product">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-2">
                                            <h4 class="font-semibold text-gray-800">Premium Wireless Headphones</h4>
                                            <span class="text-sm text-gray-500">Oct 26, 2024</span>
                                        </div>
                                        <div class="flex items-center space-x-1 mb-3">
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <span class="ml-2 text-sm font-medium text-gray-700">5.0</span>
                                        </div>
                                        <p class="text-gray-600 mb-4">Absolutely love these headphones! The sound quality is amazing and the noise cancellation works perfectly. Battery life is impressive too - lasts me a full week of commuting.</p>
                                        <div class="flex items-center space-x-4">
                                            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors">
                                                <i class="fa-solid fa-pen mr-1"></i>Edit Review
                                            </button>
                                            <button class="text-red-600 hover:text-red-800 text-sm font-medium transition-colors">
                                                <i class="fa-solid fa-trash mr-1"></i>Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all">
                                <div class="flex items-start space-x-4">
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=150&h=150&fit=crop" class="w-24 h-24 rounded-lg object-cover" alt="Product">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-2">
                                            <h4 class="font-semibold text-gray-800">Nike Air Max Running Shoes</h4>
                                            <span class="text-sm text-gray-500">Oct 15, 2024</span>
                                        </div>
                                        <div class="flex items-center space-x-1 mb-3">
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-regular fa-star text-yellow-400"></i>
                                            <span class="ml-2 text-sm font-medium text-gray-700">4.0</span>
                                        </div>
                                        <p class="text-gray-600 mb-4">Great shoes for running! Very comfortable and stylish. Only giving 4 stars because they run slightly small - recommend ordering half size up.</p>
                                        <div class="flex items-center space-x-4">
                                            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors">
                                                <i class="fa-solid fa-pen mr-1"></i>Edit Review
                                            </button>
                                            <button class="text-red-600 hover:text-red-800 text-sm font-medium transition-colors">
                                                <i class="fa-solid fa-trash mr-1"></i>Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <h4 class="font-bold text-gray-800 mb-4">Pending Reviews</h4>
                                <div class="bg-gray-50 rounded-xl p-6 flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=150&h=150&fit=crop" class="w-20 h-20 rounded-lg object-cover" alt="Product">
                                        <div>
                                            <h5 class="font-semibold text-gray-800">Smart Watch Series 7</h5>
                                            <p class="text-sm text-gray-500">Delivered on Oct 26, 2024</p>
                                        </div>
                                    </div>
                                    <button class="px-6 py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                                        Write Review
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="settings" class="tab-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 animate-slide-up">
                        <h3 class="text-xl font-bold text-gray-800 mb-6">Account Settings</h3>
                        
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                            <div class="lg:col-span-2 space-y-6">
                                <div class="border-b border-gray-200 pb-6">
                                    <h4 class="font-semibold text-gray-800 mb-4">Profile Information</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                            <input type="text" value="John" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                            <input type="text" value="Doe" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                            <input type="email" value="john.doe@email.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                            <input type="tel" value="+1 (555) 123-4567" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                                        </div>
                                    </div>
                                </div>

                                <div class="border-b border-gray-200 pb-6">
                                    <h4 class="font-semibold text-gray-800 mb-4">Change Password</h4>
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Current Password</label>
                                            <input type="password" placeholder="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">New Password</label>
                                            <input type="password" placeholder="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Confirm New Password</label>
                                            <input type="password" placeholder="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                                        </div>
                                    </div>
                                </div>

                                <div class="border-b border-gray-200 pb-6">
                                    <h4 class="font-semibold text-gray-800 mb-4">Email Notifications</h4>
                                    <div class="space-y-3">
                                        <label class="flex items-center space-x-3 cursor-pointer">
                                            <input type="checkbox" checked class="custom-checkbox">
                                            <span class="text-gray-700">Order updates and shipping notifications</span>
                                        </label>
                                        <label class="flex items-center space-x-3 cursor-pointer">
                                            <input type="checkbox" checked class="custom-checkbox">
                                            <span class="text-gray-700">Promotional emails and discounts</span>
                                        </label>
                                        <label class="flex items-center space-x-3 cursor-pointer">
                                            <input type="checkbox" class="custom-checkbox">
                                            <span class="text-gray-700">Newsletter and product recommendations</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="flex space-x-4">
                                    <button class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg font-medium hover:shadow-lg transition-all transform hover:scale-105">
                                        Save Changes
                                    </button>
                                    <button class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors">
                                        Cancel
                                    </button>
                                </div>
                            </div>

                            <div>
                                <div class="bg-gray-50 rounded-xl p-6 text-center">
                                    <div class="relative inline-block mb-4">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile" class="w-32 h-32 rounded-full mx-auto border-4 border-white shadow-lg">
                                        <button class="absolute bottom-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors shadow-lg">
                                            <i class="fa-solid fa-camera"></i>
                                        </button>
                                    </div>
                                    <h4 class="font-semibold text-gray-800 mb-1">Profile Picture</h4>
                                    <p class="text-sm text-gray-500 mb-4">JPG, GIF or PNG. Max size 2MB</p>
                                    <button class="px-4 py-2 border border-blue-600 text-blue-600 rounded-lg text-sm font-medium hover:bg-blue-50 transition-colors">
                                        Upload New Photo
                                    </button>
                                </div>

                                <div class="mt-6 p-6 border border-red-200 rounded-xl bg-red-50">
                                    <h4 class="font-semibold text-red-800 mb-2">Danger Zone</h4>
                                    <p class="text-sm text-red-600 mb-4">Once you delete your account, there is no going back.</p>
                                    <button class="w-full px-4 py-2 bg-red-600 text-white rounded-lg font-medium hover:bg-red-700 transition-colors">
                                        Delete Account
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
@endsection