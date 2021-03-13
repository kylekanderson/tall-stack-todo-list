@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center items-center min-h-screen py-12 bg-custom-lightest-gray sm:px-6 lg:px-8">
    <div class="card w-3/4 max-w-xl rounded-xl overflow-hidden shadow-lg my-2">
        <h1 class="title font-bold text-xl p-4">My Tasks</h1>
        @livewire('task-list')
        @livewire('add-task')
    </div>
</div>
@endsection
