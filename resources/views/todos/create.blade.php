@extends('layouts.app')

@section('content')
<h1 class="text-center display-4 mt-4">Todos page</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
                Create new todos
            </div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                        <li class="list-group-item">{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/store-todos" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Description" cols="5" rows="5"
                            name="description"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Create todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


@endsection