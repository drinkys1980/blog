<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    public function create()
    {
        return view("admin.categories.create");
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category($request->all());
        $category->save();

        flash('La categoría ' . $category->name . ' fue guardada en forma exitosa.')->success();
        return redirect()->route('categories.index');
    }

    public function index()
    {
        $categories = Category::orderBy('id', 'ASC')->paginate(10);
        return view('admin.categories.index')->with('categories', $categories);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        Flash::error('La categoría ' .$category->name. ' fue eliminada en forma exitosa.');
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->fill($request->all());
        $category->save();
        Flash::warning('La categoría ' . $category->name . ' fue actualizada en forma exitosa.')->success();
        return redirect()->route('categories.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
