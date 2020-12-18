<?php

namespace App\Http\Controllers;

use App\Http\Requests\Todos\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Todo;

final class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todos.index')->with('todos', $todos);
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(StoreRequest $request)
    {
        $body = $request->all();

        $todo = Todo::factory()->create([
            'name' => $body['name'] ?? 'Task',
            'description' => $body['description'] ?? 'Description'
        ]);

        $todo->save();

        return \redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(StoreRequest $request, Todo $todo)
    {
        $data = $request->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();

        return redirect('/todos');
    }

    public function destroy(Todo $todo) 
    {
        $todo->delete();

        return redirect('/todos');
    }
}

