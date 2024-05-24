<!-- resources/views/todos/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1 class="my-4"> <i class="fas fa-tasks me-2"></i>TaskQueue</h1>

<form action="{{ route('todos.store') }}" method="POST" class="mb-4">
    @csrf
    <div class="input-group">
        <input type="text" name="title" class="form-control" placeholder="New Task" required>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>

@if($todos->count())
<ul class="list-group">
    @foreach($todos as $todo)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <form action="{{ route('todos.update', $todo) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-link">
                <input type="checkbox" {{ $todo->completed ? 'checked' : '' }} onchange="this.form.submit()">
                <span class="{{ $todo->completed ? 'text-decoration-line-through' : '' }}">{{ $todo->title }}</span>
            </button>
        </form>
        <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i> Delete</button>
        </form>
    </li>
    @endforeach
</ul>
@else
<p class="text-center">No tasks yet!</p>
@endif
@endsection