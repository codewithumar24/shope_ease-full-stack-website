<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function edit()
    {
        return view('admin.categories.edit');
    }

    public function show()
    {
        return view('admin.categories.show');
    }


    public function store(Request $request)
    {
      $request->validate([
            'name' => 'required|string|max:20|unique:categories,name',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);


   
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('uploads', 'public');
        }

        Category::create([
            'name' => $request->name,
           'image' => $image
        ]);
     

        return redirect()->route('category.home')->with('success', 'Category created successfully');
    }
}
