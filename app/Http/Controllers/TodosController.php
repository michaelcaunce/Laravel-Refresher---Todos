<?php

/*

The Controller is a php class that controls what happens when a user visits a specific Route

*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo; // Use the Todo model

class TodosController extends Controller
{
    //
    public function index() {
      /*
      Return all the todos from the database
      and display them in todos/index.php
      */
      $todos = Todo::all(); // Get all the todos and save them in the variable $todos
      // Use the function 'with' and pass in the name of the 'key' as the first arguement to pass to the view. The second arguement is the data we pass.
      return view('todos.index')->with('todos', $todos);
    }

    public function show(Todo $todo) {
      // Use the model to grab the ID using the passed arguement
      // $todo = Todo::find($todoID);
      // Return the view with the key and pass in the $todo variable
      return view('todos.show')->with('todo', $todo);
    }

    public function create() {
      return view('todos.create');
    }

    public function store() {
      // Add validation to the fields
      $this->validate(request(), array(
          'name'        => 'required',
          'description' => 'required'
        ));
      // Store all the client side data
      $data = request()->all();

      // Create new instance of the Todo model
      $todo = new Todo();
      // Assign 'name' property which corresponds to the 'name' field in the database
      $todo->name =$data['name'];
      // Assign 'description' property which corresponds to the 'description' field in the database
      $todo->description =$data['description'];
      // Save to the database
      $todo->save();
      // Call the session function to display a success message
      session()->flash('success', 'Todo created successfully');
      // Return the user back to the list of todos.
      return redirect('/todos');
    }

    public function edit(Todo $todo) {
      // Find the specific ID to edit
      // $todo = Todo::find($todoId);
      // Return the edit view with the specific todo that we want to edit
      return view('todos.edit')->with('todo', $todo);

    }

    public function update(Todo $todo) {
      // Add validation to the fields
      $this->validate(request(), array(
          'name'        => 'required',
          'description' => 'required'
        ));

      // Access all data from the form
      $data = request()->all();
      // Find the specific ID to edit
      // $todo = Todo::find($todoId);
      // Assign/Update the new values
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      // Save the data
      $todo->save();
      // Call the session function to display a success message
      session()->flash('success', 'Todo updated successfully');
      // Return the user using redirect
      return redirect('/todos');
    }

    public function destroy(Todo $todo) {
      // Find the specific ID
      // $todo = Todo::find($todoId);
      $todo->delete();
      // Call the session function to display a success message
      session()->flash('success', 'Todo deleted successfully');
      return redirect('/todos');
    }

    public function complete(Todo $todo) {
      $todo->completed = true;
      $todo->save();
      session()->flash('success', 'Todo completed successfully');
      return redirect('/todos');
    }
}
