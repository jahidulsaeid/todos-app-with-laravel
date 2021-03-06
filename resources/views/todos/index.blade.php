@extends('layouts.app')

@section('content')
<h1 class="text-center display-4 mt-4">Todos page</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header text-center">
                Todos
            </div>

            <div class="card-body">
                <ul class="list-group">
                    
                    @foreach($todos as $todo)
                    <li class="list-group-item">
                        {{$todo -> name}}


                        @if(!$todo ->completed)
                        <a href="/todos/{{$todo->id}}/complete"
                            class="btn btn-warning float-right btn-sm text-white">Complete</a>
                        @endif

                        <a href="/todos/{{$todo->id}}" class="btn btn-primary float-right btn-sm mr-2">View</a>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>

@endsection


@section('title')
Todos List
@endsection