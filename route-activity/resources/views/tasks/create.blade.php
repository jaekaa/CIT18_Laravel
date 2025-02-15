@extends('tasks.layout')

@section('content')
<h1>Create New Task</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description"></textarea>
    <br>
    <label for="is_completed">Completed:</label>
    <input type="checkbox" name="is_completed">
    <br>
    <button type="submit">Create Task</button>
</form>
@endsection
