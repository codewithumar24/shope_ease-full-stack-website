@extends('layouts.admin_main')

@section('admin-content')
      <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
    <div class="mb-8">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Categories</h1>
                <p class="text-gray-600">Manage your product categories</p>
            </div>
            @if (session('success')){
                <span class="bg-blue-400 text-orange-600">{{ session('success') }}</span>
            }
                
            @endif
            <a href="{{route('category.create')}}" 
               class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold flex items-center gap-2 hover:scale-105 transition-all shadow-lg">
                <i class="fa-solid fa-plus"></i>
                <span>New Category</span>
            </a>
        </div>
    </div>

    <!-- Search & Filters -->
    <div class="bg-white rounded-2xl shadow-sm p-4 mb-6 flex flex-col md:flex-row gap-4">
        <div class="flex-1 relative">
            <i class="fa-solid fa-search absolute left-4 top-3.5 text-gray-400"></i>
            <input type="text" id="searchInput" 
                   placeholder="Search categories..." 
                   class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
        </div>
        <button class="px-5 py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition-colors">
            <i class="fa-solid fa-filter"></i>
        </button>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead>
                <tr class="border-b border-gray-100 bg-gray-50">
                    <th class="px-6 py-5 text-left text-xs font-semibold text-gray-500 uppercase">Category Name</th>
                    <th class="px-6 py-5 text-left text-xs font-semibold text-gray-500 uppercase">Products</th>
                    <th class="px-6 py-5 text-left text-xs font-semibold text-gray-500 uppercase">Created At</th>
                    <th class="px-6 py-5 text-right text-xs font-semibold text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody id="categoryTable" class="text-sm">
                <!-- Dummy Data -->
                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors table-row-hover">
                    <td class="px-6 py-5 font-medium text-gray-800">Electronics</td>
                    <td class="px-6 py-5"><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">142</span></td>
                    <td class="px-6 py-5 text-gray-500">12 May 2026</td>
                    <td class="px-6 py-5 text-right">
                        <a href="#" class="text-blue-600 hover:text-blue-700 mx-2">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#" class="text-amber-600 hover:text-amber-700 mx-2">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <button onclick="deleteCategory(this)" class="text-red-600 hover:text-red-700 mx-2">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>

                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors table-row-hover">
                    <td class="px-6 py-5 font-medium text-gray-800">Fashion</td>
                    <td class="px-6 py-5"><span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-bold">89</span></td>
                    <td class="px-6 py-5 text-gray-500">10 May 2026</td>
                    <td class="px-6 py-5 text-right">
                        <a href="{{route('category.show')}}" class="text-blue-600 hover:text-blue-700 mx-2"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{route('category.edit')}}" class="text-amber-600 hover:text-amber-700 mx-2"><i class="fa-solid fa-pen"></i></a>
                        <button onclick="deleteCategory(this)" class="text-red-600 hover:text-red-700 mx-2"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>

                <!-- Aur dummy rows add kar sakte ho -->
            </tbody>
        </table>
    </div>
</main>
<script>
function deleteCategory(btn) {
    if(confirm("Are you sure you want to delete this category?")) {
        btn.closest('tr').remove();
    }
}

// Simple Search
document.getElementById('searchInput').addEventListener('keyup', function() {
    const value = this.value.toLowerCase();
    const rows = document.querySelectorAll('#categoryTable tr');
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(value) ? '' : 'none';
    });
});
</script>
@endsection