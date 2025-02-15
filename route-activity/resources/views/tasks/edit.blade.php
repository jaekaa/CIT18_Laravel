@extends('tasks.layout')

@section('content')
<h1>Edit Task</h1>

<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $task->title }}" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description">{{ $task->description }}</textarea>
    <br>
    <label for="is_completed">Completed:</label>
    <input type="checkbox" name="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
    <br>
    <button type="submit">Update Task</button>
</form>
@endsection
