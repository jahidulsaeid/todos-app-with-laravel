<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        return view ('todos.index')->with('todos', Todo::all());
    }
    public function show(Todo $todo){
        // $todo = Todo::find($todoId);
        return view('todos.show')->with('todo',$todo);
    }
    public function create(){
        return view('todos.create');
    }
    public function store(){
        $this-> validate(request(),[
            'name'=> 'required|min:6|max:15',
            'description'=> 'required'
        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo ->completed =false;

        $todo -> save();
        session()->flash('success','Todo Create successfully');
        return redirect('/todos');
    }
    public function edit(Todo $todo){
        // $todo = Todo::find($todoId);

        return view('todos.edit')->with('todo',$todo);
    }
    public function update(Todo $todo){
        $this-> validate(request(),[
            'name'=> 'required|min:6|max:15',
            'description'=> 'required'
        ]);
        $data = request()->all();

        // $todo = Todo::find($todoId);

        $todo->name =$data['name'];
        $todo->description =$data['description'];
      
        $todo->save();
        session()->flash('success','Todo Update successfully');
        return redirect('/todos');
    }
    public function destroy(Todo $todo){
        // $todo = Todo::find($todoId);

        $todo -> delete();

        session()->flash('success','Todo Delete successfully');

        return redirect('/todos');
    }
    public function complete(Todo $todo){
        $todo->completed = true;
        $todo -> save();
        session()->flash('success','Todo completed successfully');
        return redirect('/todos');
    }
}

