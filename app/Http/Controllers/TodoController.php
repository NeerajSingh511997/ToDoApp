<?php

namespace App\Http\Controllers;

use App\Todo;
use Session;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function index() {
    	return view('welcome');
    }

    public function todo() {
    	$todos = Todo::all();
    	return view("todo")->with('todos', $todos);
    }

    public function create(Request $request) {
    	$todos = new Todo();
    	$todos->todo = $request->todo;
    	$todos->save();
    	Session::flash('create', 'Your todo has been created successfully');
    	return redirect()->back();
    }

    public function dump($id){
    	$todo = new Todo();
        if ($todo != null) {
            $todo->find($id)->delete();    
            Session::flash('dump', 'Your todo has been dumped successfully');
        }else {
            Session::flash('error', 'Sorry something went wrong');
        }
    	// $todo1 = new Todo();
    	// $todo2 = $todo1->find($id);
    	// $todo3 = $todo2->delete();
    	// dd($todo3);
    	// $todo->destroy();
    	// $todo->save();
    	return redirect()->route('todo');

    }

    public function update($id){
    	$todo = Todo::find($id);
    	return view('update')->with('todo', $todo);
    }

    public function save(Request $request, $id) {
    	$todo = Todo::find($id);
    	$todo->todo = $request->todo;
    	$todo->save();
    	Session::flash('update', 'Your todo has been updated successfully');
    	return redirect()->route('todo');
    }
    
    public function completed($id) {
        // dd($id);
        $todos = Todo::find($id);
        // print_r($todos->toArray());
        $todos->completed = 1;
        // print_r();
        $todos->save();
        Session::flash('completed', "Your todo has been marked as completed");
        return redirect()->route('todo');
    }

    public function undo($id) {
        // dd($id);
        $todo = Todo::find($id);
        $todo->completed = 0;
        $todo->save();
        Session::flash('undo', "Your todo has been undo successfully");
        return redirect()->route('todo');
    }
}


