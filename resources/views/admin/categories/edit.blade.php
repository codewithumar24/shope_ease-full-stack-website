@extends('layouts.admin_main')

@section('admin-content')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
    <div class="max-w-2xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Edit Category</h1>
        </div>

        <div class="bg-white rounded-3xl shadow-sm p-8">
            <form>
                <div class="mb-8">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Category Name</label>
                    <input type="text" value="Electronics" 
                           class="w-full px-5 py-4 border border-gray-200 rounded-2xl focus:outline-none focus:border-blue-500 text-lg">
                </div>

                <div class="flex gap-4">
                    <a href="{{route('category.home')}}" 
                       class="flex-1 py-4 text-center border border-gray-300 rounded-2xl font-semibold hover:bg-gray-50">
                        Cancel
                    </a>
                    <button type="submit"
                            class="flex-1 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-2xl font-semibold hover:scale-105 transition-all">
                        Update Category
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection