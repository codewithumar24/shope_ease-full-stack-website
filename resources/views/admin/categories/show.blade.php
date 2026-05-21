@extends('layouts.admin_main')

@section('admin-content')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
    <div class="max-w-3xl mx-auto">
        <a href="{{route('category.home')}}" class="text-blue-600 flex items-center gap-2 mb-6 hover:underline">
            ← Back to Categories
        </a>

        <div class="bg-white rounded-3xl shadow-sm p-10">
            <div class="flex justify-between items-start">
                <div>
                    <h1 class="text-4xl font-bold text-gray-800">Electronics</h1>
                    <p class="text-gray-500 mt-2">Created on 12 May 2026</p>
                </div>
                <span class="bg-green-100 text-green-700 px-5 py-2 rounded-2xl text-sm font-semibold">142 Products</span>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 text-center">
                    <p class="text-gray-500 text-sm">Total Products</p>
                    <p class="text-4xl font-bold text-gray-800 mt-2">142</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 text-center">
                    <p class="text-gray-500 text-sm">Active</p>
                    <p class="text-4xl font-bold text-green-600 mt-2">138</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 text-center">
                    <p class="text-gray-500 text-sm">Out of Stock</p>
                    <p class="text-4xl font-bold text-amber-600 mt-2">4</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection