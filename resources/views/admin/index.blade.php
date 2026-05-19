@extends('layouts.admin_main')

@section('admin-content')
     <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
                
                <div class="mb-8 animate-slide-up">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Dashboard Overview</h1>
                    <p class="text-gray-600">Welcome back! Here's what's happening with your store today.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    
                    <div class="gradient-border hover-card bg-white rounded-xl p-6 shadow-lg animate-slide-up" style="animation-delay: 0.1s">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg animate-float">
                                <i class="fa-solid fa-dollar-sign text-2xl text-white"></i>
                            </div>
                            <span class="flex items-center text-green-500 text-sm font-semibold bg-green-100 px-2 py-1 rounded-full">
                                <i class="fa-solid fa-arrow-up mr-1"></i> 12.5%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Total Sales</h3>
                        <p class="text-3xl font-bold text-gray-800">$48,295</p>
                        <p class="text-xs text-gray-400 mt-2">Compared to last month</p>
                    </div>

                    <div class="gradient-border hover-card bg-white rounded-xl p-6 shadow-lg animate-slide-up" style="animation-delay: 0.2s">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center shadow-lg animate-float" style="animation-delay: 0.5s">
                                <i class="fa-solid fa-shopping-bag text-2xl text-white"></i>
                            </div>
                            <span class="flex items-center text-green-500 text-sm font-semibold bg-green-100 px-2 py-1 rounded-full">
                                <i class="fa-solid fa-arrow-up mr-1"></i> 8.2%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Total Orders</h3>
                        <p class="text-3xl font-bold text-gray-800">1,482</p>
                        <p class="text-xs text-gray-400 mt-2">Compared to last month</p>
                    </div>

                    <div class="gradient-border hover-card bg-white rounded-xl p-6 shadow-lg animate-slide-up" style="animation-delay: 0.3s">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center shadow-lg animate-float" style="animation-delay: 1s">
                                <i class="fa-solid fa-users text-2xl text-white"></i>
                            </div>
                            <span class="flex items-center text-red-500 text-sm font-semibold bg-red-100 px-2 py-1 rounded-full">
                                <i class="fa-solid fa-arrow-down mr-1"></i> 2.1%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Total Customers</h3>
                        <p class="text-3xl font-bold text-gray-800">3,642</p>
                        <p class="text-xs text-gray-400 mt-2">Compared to last month</p>
                    </div>

                    <div class="gradient-border hover-card bg-white rounded-xl p-6 shadow-lg animate-slide-up" style="animation-delay: 0.4s">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center shadow-lg animate-float" style="animation-delay: 1.5s">
                                <i class="fa-solid fa-box text-2xl text-white"></i>
                            </div>
                            <span class="flex items-center text-green-500 text-sm font-semibold bg-green-100 px-2 py-1 rounded-full">
                                <i class="fa-solid fa-arrow-up mr-1"></i> 4.3%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Total Products</h3>
                        <p class="text-3xl font-bold text-gray-800">245</p>
                        <p class="text-xs text-gray-400 mt-2">Active products</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 0.5s">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Sales Analytics</h3>
                                <p class="text-sm text-gray-500">Revenue vs Orders</p>
                            </div>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-sm rounded-full bg-blue-100 text-blue-600 font-medium transition-all hover:bg-blue-600 hover:text-white">Week</button>
                                <button class="px-3 py-1 text-sm rounded-full bg-gray-100 text-gray-600 font-medium transition-all hover:bg-blue-600 hover:text-white">Month</button>
                                <button class="px-3 py-1 text-sm rounded-full bg-gray-100 text-gray-600 font-medium transition-all hover:bg-blue-600 hover:text-white">Year</button>
                            </div>
                        </div>
                        <div class="chart-container">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 0.6s">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Top Products</h3>
                        <div class="space-y-4">
                            
                            <div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer group">
                                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=100&h=100&fit=crop" class="w-12 h-12 rounded-lg object-cover group-hover:scale-110 transition-transform" alt="Product">
                                <div class="flex-1">
                                    <h4 class="text-sm font-semibold text-gray-800">Premium Headphones</h4>
                                    <p class="text-xs text-gray-500">245 sold</p>
                                </div>
                                <span class="text-sm font-bold text-blue-600">$12,250</span>
                            </div>

                            <div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer group">
                                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=100&h=100&fit=crop" class="w-12 h-12 rounded-lg object-cover group-hover:scale-110 transition-transform" alt="Product">
                                <div class="flex-1">
                                    <h4 class="text-sm font-semibold text-gray-800">Smart Watch Pro</h4>
                                    <p class="text-xs text-gray-500">189 sold</p>
                                </div>
                                <span class="text-sm font-bold text-blue-600">$37,800</span>
                            </div>

                            <div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer group">
                                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=100&h=100&fit=crop" class="w-12 h-12 rounded-lg object-cover group-hover:scale-110 transition-transform" alt="Product">
                                <div class="flex-1">
                                    <h4 class="text-sm font-semibold text-gray-800">Running Shoes</h4>
                                    <p class="text-xs text-gray-500">156 sold</p>
                                </div>
                                <span class="text-sm font-bold text-blue-600">$12,480</span>
                            </div>

                            <div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer group">
                                <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?w=100&h=100&fit=crop" class="w-12 h-12 rounded-lg object-cover group-hover:scale-110 transition-transform" alt="Product">
                                <div class="flex-1">
                                    <h4 class="text-sm font-semibold text-gray-800">Leather Bag</h4>
                                    <p class="text-xs text-gray-500">134 sold</p>
                                </div>
                                <span class="text-sm font-bold text-blue-600">$9,380</span>
                            </div>

                            <div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer group">
                                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=100&h=100&fit=crop" class="w-12 h-12 rounded-lg object-cover group-hover:scale-110 transition-transform" alt="Product">
                                <div class="flex-1">
                                    <h4 class="text-sm font-semibold text-gray-800">Polaroid Camera</h4>
                                    <p class="text-xs text-gray-500">98 sold</p>
                                </div>
                                <span class="text-sm font-bold text-blue-600">$14,700</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 0.7s">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Recent Orders</h3>
                                <p class="text-sm text-gray-500">Latest 5 orders from customers</p>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors">View All</a>
                        </div>
                        
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-100">
                                        <th class="pb-3 pl-2">Order ID</th>
                                        <th class="pb-3">Customer</th>
                                        <th class="pb-3">Product</th>
                                        <th class="pb-3">Amount</th>
                                        <th class="pb-3">Status</th>
                                        <th class="pb-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm">
                                    <tr class="table-row-hover border-b border-gray-50">
                                        <td class="py-4 pl-2 font-medium text-blue-600">#ORD-7782</td>
                                        <td class="py-4">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-8 h-8 rounded-full" alt="User">
                                                <span class="font-medium text-gray-800">Sarah Johnson</span>
                                            </div>
                                        </td>
                                        <td class="py-4 text-gray-600">Premium Headphones x2</td>
                                        <td class="py-4 font-semibold text-gray-800">$199.98</td>
                                        <td class="py-4">
                                            <span class="status-badge px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700 border border-yellow-200">
                                                Pending
                                            </span>
                                        </td>
                                        <td class="py-4">
                                            <button class="text-blue-600 hover:text-blue-800 transition-colors"><i class="fa-solid fa-eye"></i></button>
                                            <button class="text-gray-400 hover:text-gray-600 ml-2 transition-colors"><i class="fa-solid fa-ellipsis-v"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="table-row-hover border-b border-gray-50">
                                        <td class="py-4 pl-2 font-medium text-blue-600">#ORD-7781</td>
                                        <td class="py-4">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-8 h-8 rounded-full" alt="User">
                                                <span class="font-medium text-gray-800">Michael Chen</span>
                                            </div>
                                        </td>
                                        <td class="py-4 text-gray-600">Smart Watch Pro</td>
                                        <td class="py-4 font-semibold text-gray-800">$199.99</td>
                                        <td class="py-4">
                                            <span class="status-badge px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 border border-green-200">
                                                Completed
                                            </span>
                                        </td>
                                        <td class="py-4">
                                            <button class="text-blue-600 hover:text-blue-800 transition-colors"><i class="fa-solid fa-eye"></i></button>
                                            <button class="text-gray-400 hover:text-gray-600 ml-2 transition-colors"><i class="fa-solid fa-ellipsis-v"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="table-row-hover border-b border-gray-50">
                                        <td class="py-4 pl-2 font-medium text-blue-600">#ORD-7780</td>
                                        <td class="py-4">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-8 h-8 rounded-full" alt="User">
                                                <span class="font-medium text-gray-800">Emily Davis</span>
                                            </div>
                                        </td>
                                        <td class="py-4 text-gray-600">Running Shoes x1</td>
                                        <td class="py-4 font-semibold text-gray-800">$79.99</td>
                                        <td class="py-4">
                                            <span class="status-badge px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700 border border-blue-200">
                                                Processing
                                            </span>
                                        </td>
                                        <td class="py-4">
                                            <button class="text-blue-600 hover:text-blue-800 transition-colors"><i class="fa-solid fa-eye"></i></button>
                                            <button class="text-gray-400 hover:text-gray-600 ml-2 transition-colors"><i class="fa-solid fa-ellipsis-v"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="table-row-hover border-b border-gray-50">
                                        <td class="py-4 pl-2 font-medium text-blue-600">#ORD-7779</td>
                                        <td class="py-4">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://randomuser.me/api/portraits/men/86.jpg" class="w-8 h-8 rounded-full" alt="User">
                                                <span class="font-medium text-gray-800">Robert Wilson</span>
                                            </div>
                                        </td>
                                        <td class="py-4 text-gray-600">Leather Bag x2</td>
                                        <td class="py-4 font-semibold text-gray-800">$139.98</td>
                                        <td class="py-4">
                                            <span class="status-badge px-3 py-1 rounded-full text-xs font-semibold bg-purple-100 text-purple-700 border border-purple-200">
                                                Shipped
                                            </span>
                                        </td>
                                        <td class="py-4">
                                            <button class="text-blue-600 hover:text-blue-800 transition-colors"><i class="fa-solid fa-eye"></i></button>
                                            <button class="text-gray-400 hover:text-gray-600 ml-2 transition-colors"><i class="fa-solid fa-ellipsis-v"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="table-row-hover">
                                        <td class="py-4 pl-2 font-medium text-blue-600">#ORD-7778</td>
                                        <td class="py-4">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://randomuser.me/api/portraits/women/22.jpg" class="w-8 h-8 rounded-full" alt="User">
                                                <span class="font-medium text-gray-800">Lisa Anderson</span>
                                            </div>
                                        </td>
                                        <td class="py-4 text-gray-600">Polaroid Camera</td>
                                        <td class="py-4 font-semibold text-gray-800">$149.99</td>
                                        <td class="py-4">
                                            <span class="status-badge px-3 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-700 border border-red-200">
                                                Cancelled
                                            </span>
                                        </td>
                                        <td class="py-4">
                                            <button class="text-blue-600 hover:text-blue-800 transition-colors"><i class="fa-solid fa-eye"></i></button>
                                            <button class="text-gray-400 hover:text-gray-600 ml-2 transition-colors"><i class="fa-solid fa-ellipsis-v"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 0.8s">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-bold text-gray-800">Recent Activity</h3>
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="fa-solid fa-sync-alt hover:rotate-180 transition-transform duration-500"></i>
                            </button>
                        </div>
                        
                        <div class="relative pl-4 space-y-6 before:absolute before:left-0 before:top-2 before:bottom-2 before:w-0.5 before:bg-gradient-to-b before:from-blue-500 before:to-purple-500">
                            
                            <div class="relative pl-6 group">
                                <div class="absolute left-[-5px] top-1 w-3 h-3 rounded-full bg-blue-500 border-2 border-white shadow-md group-hover:scale-150 transition-transform"></div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-500 transition-colors duration-300">
                                        <i class="fa-solid fa-shopping-bag text-blue-600 group-hover:text-white transition-colors"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-800">New order received</p>
                                        <p class="text-xs text-gray-500 mt-1">Order #7782 from Sarah Johnson</p>
                                        <p class="text-xs text-blue-500 mt-1">2 minutes ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative pl-6 group">
                                <div class="absolute left-[-5px] top-1 w-3 h-3 rounded-full bg-purple-500 border-2 border-white shadow-md group-hover:scale-150 transition-transform"></div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0 group-hover:bg-purple-500 transition-colors duration-300">
                                        <i class="fa-solid fa-user-plus text-purple-600 group-hover:text-white transition-colors"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-800">New customer</p>
                                        <p class="text-xs text-gray-500 mt-1">James Miller registered</p>
                                        <p class="text-xs text-purple-500 mt-1">15 minutes ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative pl-6 group">
                                <div class="absolute left-[-5px] top-1 w-3 h-3 rounded-full bg-green-500 border-2 border-white shadow-md group-hover:scale-150 transition-transform"></div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 group-hover:bg-green-500 transition-colors duration-300">
                                        <i class="fa-solid fa-check text-green-600 group-hover:text-white transition-colors"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-800">Order completed</p>
                                        <p class="text-xs text-gray-500 mt-1">Order #7781 delivered</p>
                                        <p class="text-xs text-green-500 mt-1">1 hour ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative pl-6 group">
                                <div class="absolute left-[-5px] top-1 w-3 h-3 rounded-full bg-amber-500 border-2 border-white shadow-md group-hover:scale-150 transition-transform"></div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center flex-shrink-0 group-hover:bg-amber-500 transition-colors duration-300">
                                        <i class="fa-solid fa-star text-amber-600 group-hover:text-white transition-colors"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-800">New review</p>
                                        <p class="text-xs text-gray-500 mt-1">5-star review on Headphones</p>
                                        <p class="text-xs text-amber-500 mt-1">3 hours ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative pl-6 group">
                                <div class="absolute left-[-5px] top-1 w-3 h-3 rounded-full bg-red-500 border-2 border-white shadow-md group-hover:scale-150 transition-transform"></div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 group-hover:bg-red-500 transition-colors duration-300">
                                        <i class="fa-solid fa-box text-red-600 group-hover:text-white transition-colors"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-800">Low stock alert</p>
                                        <p class="text-xs text-gray-500 mt-1">Running Shoes (5 left)</p>
                                        <p class="text-xs text-red-500 mt-1">5 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    
                    <div class="bg-white rounded-xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 0.9s">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-sm font-semibold text-gray-600">Conversion Rate</h4>
                            <i class="fa-solid fa-chart-line text-blue-500"></i>
                        </div>
                        <div class="flex items-end justify-between mb-2">
                            <span class="text-2xl font-bold text-gray-800">3.24%</span>
                            <span class="text-xs text-green-500 font-semibold">+0.4%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full progress-fill" style="--progress-width: 65%; width: 65%"></div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 1.0s">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-sm font-semibold text-gray-600">Avg Order Value</h4>
                            <i class="fa-solid fa-dollar-sign text-purple-500"></i>
                        </div>
                        <div class="flex items-end justify-between mb-2">
                            <span class="text-2xl font-bold text-gray-800">$84.50</span>
                            <span class="text-xs text-green-500 font-semibold">+2.1%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-2 rounded-full progress-fill" style="--progress-width: 78%; width: 78%"></div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 1.1s">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-sm font-semibold text-gray-600">Customer Retention</h4>
                            <i class="fa-solid fa-heart text-pink-500"></i>
                        </div>
                        <div class="flex items-end justify-between mb-2">
                            <span class="text-2xl font-bold text-gray-800">68.2%</span>
                            <span class="text-xs text-red-500 font-semibold">-1.2%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-pink-500 to-rose-500 h-2 rounded-full progress-fill" style="--progress-width: 68%; width: 68%"></div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 hover-card animate-slide-up" style="animation-delay: 1.2s">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-sm font-semibold text-gray-600">Satisfaction Score</h4>
                            <i class="fa-solid fa-smile text-amber-500"></i>
                        </div>
                        <div class="flex items-end justify-between mb-2">
                            <span class="text-2xl font-bold text-gray-800">4.8/5</span>
                            <span class="text-xs text-green-500 font-semibold">+0.2</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-amber-400 to-orange-500 h-2 rounded-full progress-fill" style="--progress-width: 96%; width: 96%"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl shadow-lg p-6 text-white animate-slide-up" style="animation-delay: 1.3s">
                    <div class="flex flex-col md:flex-row items-center justify-between">
                        <div class="mb-4 md:mb-0">
                            <h3 class="text-xl font-bold mb-2">Quick Actions</h3>
                            <p class="text-blue-100">Manage your store efficiently with these shortcuts</p>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <button class="px-6 py-3 bg-white text-blue-600 rounded-full font-semibold hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex items-center space-x-2">
                                <i class="fa-solid fa-plus"></i>
                                <span>Add Product</span>
                            </button>
                            <button class="px-6 py-3 bg-white/20 backdrop-blur text-white rounded-full font-semibold hover:bg-white/30 transition-all duration-300 transform hover:scale-105 flex items-center space-x-2">
                                <i class="fa-solid fa-file-export"></i>
                                <span>Export Report</span>
                            </button>
                            <button class="px-6 py-3 bg-white/20 backdrop-blur text-white rounded-full font-semibold hover:bg-white/30 transition-all duration-300 transform hover:scale-105 flex items-center space-x-2">
                                <i class="fa-solid fa-bullhorn"></i>
                                <span>Create Campaign</span>
                            </button>
                        </div>
                    </div>
                </div>

            </main>
@endsection