@extends('layouts.app')

@section('title')
    Edit: {{ $todo->name }}
@endsection

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8 my-3">

        <div class="card card-default">

            <div class="card-header">
                Edit: {{ $todo->name }}
            </div>

            <div class="card-body">

                @if ($errors->any)

                    <div class="alert alert-danger">

                        <ul class="list list-group">

                            @foreach ($errors->all() as $error)

                                <li class="list-group-item">
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>
                    </div>

                @endif 

                <form action="/update" method="POST">
                    @csrf
                    <div class="form-group">
                
                        <input type="text" class="form-control" name="name" placeholder="Title" value="{{ $todo->name }}">
                
                    </div>

                    <div class="form-group">

                        <textarea name="description" placeholder="Description" id="" cols="5" rows="5" class="form-control" value="{{ $todo->description }}">
                            
                        </textarea>

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn-success float-right">

                            Create

                        </button>

                    </div>
                
                </form>

            </div>

        </div>

    </div>

</div>

@endsection