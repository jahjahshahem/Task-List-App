@extends('layouts.app')

@section('title', 'The List Of Tasks')

@section('content')
<nav class="link">
    <a href="{{ route('tasks.create') }}">Create Task</a>
</nav>

<div>
    @forelse ($tasks as $task )
     <div>
        <a href="{{ route('tasks.show', ['task' => $task->id ])}}"
            @class(['line-through' => $task->completed])>{{ $task->title }}</a>
     </div>
    @empty
     <div>No tasks!</div>
    @endforelse

    @if ($tasks->count())
     <nav class ="mt-4">{{ $tasks->links() }}</nav>
    @endif
@endsection
