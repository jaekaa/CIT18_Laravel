@extends('tasks.layout')

@section('content')
<h1>Task Details</h1>

<p><strong>Title:</strong> {{ $task->title }}</p>
<p><strong>Description:</strong> {{ $task->description }}</p>
<p><strong>Status:</strong> {{ $task->is_completed ? 'Completed' : 'Pending' }}</p>

<a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
<form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection
