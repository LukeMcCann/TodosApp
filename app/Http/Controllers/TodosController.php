<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }
}
