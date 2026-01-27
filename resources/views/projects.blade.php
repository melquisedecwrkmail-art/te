@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <h1 class="text-3xl font-semibold mb-6">My Projects</h1>

    @if($projects->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <div class="bg-white dark:bg-gray-800 shadow rounded p-4">
                    <h2 class="font-bold text-xl">{{ $project->title ?? 'No Title' }}</h2>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">{{ $project->description ?? 'No description yet' }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p>No projects yet! Go to 
            <a href="{{ url('/admin/projects/create') }}" class="text-blue-500 underline">
                Admin Panel
            </a> 
            to add some.
        </p>
    @endif
@endsection
