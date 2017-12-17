<?php

namespace App\Http\Controllers;

use Session;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller {

    public function getTodo() {

    	$todos = Todo::all();


    	return view('todos')->with('todos', $todos);
    }

    public function postCreateTodo (Request $request) {

    	$todo = new Todo;

    	$todo->todo = $request->todo;
    	$todo->save();

    	Session::flash('success','YOur to do is created');

    	return redirect()->back();
    }

    public function getDeteleTodo($id) {
    	//dd($id);

    	$todo = Todo::find($id);

    	$todo-> delete();

    	Session::flash('success','YOur to do is deleted');

    	return redirect()->back();
    }

    public function getUpdateTodo($id) {
    	$todo = Todo::find($id);

    	return view('update')->with('todo', $todo);
    }

    public function postUpdateTodo(Request $request, $id) {
    	$todo = Todo::find($id);

    	$todo->todo = $request->todo;
    	$todo->save();

    	Session::flash('success','YOur to do is updated');

    	return redirect()->route('todos');

    }

    public function getCompletedTodo($id) {
    	$todo = Todo::find($id);

    	$todo->completed = 1;
    	$todo->save();

    	Session::flash('success','YOur to do is mark as completed');

    	return redirect()->route('todos');
    }


}
