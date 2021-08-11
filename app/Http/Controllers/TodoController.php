<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    /**
     * Show the home page of the Task App
     */
    public function listTodo()
    {
        $users = User::all();
        return view('dashboard')->with(['users' => $users]);
    }

    /**
     * To-do Item store function implemented without livewire
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * Validate and store the To-do Item
     */
    public function addTodo(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'user_id' => 'required',
        ]);

        $newTodo = new Todo();
        $newTodo->user_id = $request->user_id;
        $newTodo->name = $request->name;
        $newTodo->save();

        if ($newTodo->save()) {
            // Task created successfully
            return redirect()->back()->with('success', 'The Task was created successfully');

        } else {
            // Issue creating the task
            return redirect()->back()->with('error', 'There was an issue creating the task');
        }

    }

}
