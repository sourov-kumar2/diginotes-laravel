<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.add-category');
    }
    public function index()
    {
        return view('category.manage-category');
    }
    public function store(Request $request)
    {
$request->validate([
    'name' => 'required',
    'description' => 'required'
]);
$categories = new Categories();
$categories->name = $request->name;
$categories->description = $request->description;
$categories->save();
return redirect()->route('category.manage');

    }
}
