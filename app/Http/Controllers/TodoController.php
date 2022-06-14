<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Exception\ValidationException;
use App\Models\Todo;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todos = Todo::all();
        $count = Todo::count();
        return view('todos.index', compact('todos', 'count'));
    }
    public function create()
    {
        return view("todos.create");
    }
    public function store(Request $request)
    {
        // try {
        //     $this->validate(request(), [
        //         'name' => ['required'],
        //         'description' => ['required']
        //     ]);
        // }
        // catch (ValidationException $e) {
        // }
        $request->validate(
            [
                'title' => 'required|min:3',
                'description' => 'required'
            ]
        );

        // $data = request()->all();


        $todo = new Todo;
        $todo->name = $request->title;
        $todo->description = $request->description;
        $todo->save();
        return redirect()->back()->with('status', 'Task Added');
    }
    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/');
    }
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show', compact('todo'));
    }
    // public function edit($id)
    public function edit($id)
    {

        // try {
        //     $this->validate(request(), [
        //         'name' => ['required'],
        //         'description' => ['required'],

        //     ]);
        // } catch (ValidationException $e) {
        // }
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
        $data = request()->all();


        // $todo->name = $data['name'];
        // $todo->description = $data['description'];
        // $todo->save();

        // session()->flash('success', 'Todo updated successfully');


    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required|min:3',
                'description' => 'required'
            ]
        );
        $todo = Todo::find($id);
        $todo->name = $request->title;
        $todo->description = $request->description;
        $todo->save();
        return redirect('/');
    }
    // public function counter()
    // {
    //     $count = Todo::count();
    //     return $count;
    // }
}