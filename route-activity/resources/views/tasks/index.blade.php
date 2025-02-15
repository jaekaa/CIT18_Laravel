@extends('tasks.layout')

@section('content')
<h1>Tasks List</h1>

<a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<ul>
    @foreach($tasks as $task)
        <li>
            {{ $task->title }} - {{ $task->description }}
            <a href="{{ route('tasks.show', $task->id) }}">View</a>
            <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
