@extends('layouts.app')

@section('title')

    Todos List
    
@endsection

@section('content')

    <h1 class="text-center my-5">Todo List</h1>

    <div class="row justify-content-center">

        <div class="col-md-8">
                
            <div class="card card-default">
                    
                <div class="card-header">

                    Todos

                    <a href="/create" class="btn-info btn-sm float-right">+</a>


                </div>

                <div class="card-body">

                    <ul class="list-group">
                            
                        @foreach ($todos as $todo)

                            <li class='list-group-item'>

                                {{ $todo->name }}

                                <a href="/todos/{{ $todo->id }}" class="btn-success btn-sm float-right">View</a>

                                <a href="/todos/{{$todo->id}}/delete" class="btn-danger btn-sm mx-2 float-right">delete</a>

                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>

        </div>

    </div>

@endsection