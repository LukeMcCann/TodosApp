<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

final class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todos.index')->with('todos', $todos);
    }
}
