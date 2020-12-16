@extends('layouts.app')

@section('title')
    New Todo
@endsection

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8 my-3">

        <div class="card card-default">

            <div class="card-header">
                Create New Todo
            </div>

            <div class="card-body">

                <form action="">

                    <div class="form-group">
                
                        <input type="text" class="form-control" name="name">
                
                    </div>

                    <div class="form-group">

                        <textarea name="description" placeholder="description" id="" cols="5" rows="5" class="form-control">
                            
                        </textarea>

                    </div>

                    <div class="form-group">

                        <button class="btn-success float-right">

                            Create

                        </button>

                    </div>
                
                </form>

            </div>

        </div>

    </div>

</div>

@endsection