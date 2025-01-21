<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function create()
    {
        $categories = Categories::all();
        return view('notes.add-notes',compact('categories'));
    }
    public function index()
    {
        $notes = Notes::all();


        return view('notes.manage-notes', compact('notes'));
    }
    public function store(Request $request)
    {

$request->validate([
    'title' => 'required',
    'content' => 'required',
    'category_id' => 'required'
]);
$notes = new Notes();
$notes->title = $request->title;
$notes->content = $request->content;
$notes->category_id = $request->category_id;
$notes->save();
return redirect()->route('notes.manage');
    }

}
