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

    public function show(int $id)
    {
        $todo = Todo::findOrFail($id);

        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $body = $request->all();

        $todo = Todo::factory()->create([
            'name' => $body['name'] ?? 'Task',
            'description' => $body['description'] ?? 'Description'
        ]);

        $todo->save();

        return \redirect('/todos');
    }

}

