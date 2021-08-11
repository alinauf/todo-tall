<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoApp extends Component
{

    //    Variable Declaration
    public $task;
    public $errorMessageShow = true;
    public $successMessageShow = true;

    public $showAll = true;
    public $showPending = false;
    public $showCompleted = false;

    // Validation Rules
    protected $rules = [
        'task' => 'required',
    ];

    //    Filter All the tasks to show only completed tasks
    public function showCompletedTasks()
    {
        $this->showCompleted = true;
        $this->showAll = false;
        $this->showPending = false;
    }

//    Filter All the tasks to show only pending tasks
    public function showPendingTasks()
    {
        $this->showPending = true;
        $this->showAll = false;
        $this->showCompleted = false;
    }

//    Filter All the tasks to show all tasks
    public function showAllTasks()
    {
        $this->showAll = true;
        $this->showCompleted = false;
        $this->showPending = false;
    }

//    Validate and To-to item and store it in DB
    public function storeTodo()
    {
        $this->validate();
        $todo = new Todo();
        $todo->name = $this->task;
        $todo->user_id = \Auth::id(); // Fetch the Logged In User Id

        if ($todo->save()) {
            $this->task = '';
            $this->successMessageShow = true;
            $this->showAllTasks();
            session()->flash('message', 'Task successfully added.');

        } else {
            $this->errorMessageShow = true;
            session()->flash('error', 'There was an issue with the submission');
        }
    }

    /**
     * @param $id
     * Change the completed state of the To-do Item
     */
    public function toggleCompleted($id)
    {
        $todo = Todo::where('id', $id)->first();
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    /**
     * @param $id
     * Remove the To-do Item
     */
    public function removeTask($id)
    {
        $deletedRows = Todo::where('id', $id)->delete();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * Render the Livewire component and rehydrate based on the the variable todoList
     */
    public function render()
    {
        $todoList = Todo::all();

        if ($this->showAll) {
            $todoList = Todo::all();
        }

        if ($this->showPending) {
            $todoList = Todo::where('completed', false)->get();
        }

        if ($this->showCompleted) {
            $todoList = Todo::where('completed', true)->get();
        }

        return view('livewire.todo-app', [
            'todolist' => $todoList,
        ]);
    }
}
