<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    //
    public function index(){
        $category = Category::orderBy('id', 'asc')->paginate(5);
        return view('category.index', ['category' => $category]);
    }

    public function create()
    {
        //
        $category = Category::orderBy('id', 'desc')->get();
        return view('category.create', ['category' => $category]);
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required'

        ]);
        $proyectData = ['nombre' => $request->nombre];
        Category::create($proyectData);
        return redirect('/category')->with(['message' => 'Category added successfully!', 'status' => 'success']);
    }

    public function show(Category $category)
    {
        //
        return view('category.show', ['category' => $category]);
    }

    public function edit($id)
    {
        //
        $category = Category::find($id);
        return view('category.edit', ['category' => $category, 'category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        //
        $proyectData = [
            'nombre' => $request->nombre
        ];
        $category->update($proyectData);
        return redirect('/category')->with([
            'message' => 'Category updated successfully!',
            'status' => 'success'
        ]);
    }

    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect('/category')->with(['message' => 'Category deleted successfully!', 'status' => 'info']);
    }
}
