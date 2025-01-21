<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Notes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $notes = Notes::all();
        $categories = Categories::all();
        return view('welcome',compact('notes','categories'));
    }
}
