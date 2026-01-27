CREATE PROJECT
@extends('layouts.admin')

@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Add New Project</h1>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-2 font-semibold">Title</label>
            <input type="text" name="title" class="w-full p-3 rounded bg-gray-800 text-white" required>
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Tech Stack</label>
            <input type="text" name="tech_stack" class="w-full p-3 rounded bg-gray-800 text-white" required>
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Description</label>
            <textarea name="description" class="w-full p-3 rounded bg-gray-800 text-white" rows="5"></textarea>
        </div>

        <button type="submit" class="bg-indigo-600 px-6 py-3 rounded hover:bg-indigo-500">
            Add Project
        </button>
    </form>
</div>
@endsection
