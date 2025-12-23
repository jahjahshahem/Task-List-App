@extends('layouts.app')

@section('title')
<h1>
    List Of Tasks
</h1>

@section('content')
<div>
    @forelse ($tasks as $task )
     <div>
        <a href="{{ route('tasks.show', ['task' => $task->id ])}}">{{ $task->title }}</a>
     </div>
    @empty
     <div>No tasks!</div>
    @endforelse

    @if ($tasks->count())
     <nav>{{ $tasks->links() }}</nav>
    @endif
@endsection
