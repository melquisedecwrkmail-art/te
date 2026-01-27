@extends('layouts.admin')

@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Add New Project</h1>

    <!-- Form: Submit to the correct admin.projects.store route -->
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <!-- Title -->
        <div class="mb-4">
            <label class="block mb-2 font-semibold">Title</label>
            <input type="text" name="title"
                   class="w-full p-3 rounded bg-gray-800 text-white"
                   value="{{ old('title') }}" required>
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tech Stack -->
        <div class="mb-4">
            <label class="block mb-2 font-semibold">Tech Stack</label>
            <input type="text" name="tech_stack"
                   class="w-full p-3 rounded bg-gray-800 text-white"
                   value="{{ old('tech_stack') }}" required>
            @error('tech_stack')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label class="block mb-2 font-semibold">Description</label>
            <textarea name="description"
                      class="w-full p-3 rounded bg-gray-800 text-white"
                      rows="5">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit"
                class="bg-indigo-600 px-6 py-3 rounded hover:bg-indigo-500">
            Add Project
        </button>
    </form>
</div>
@endsection
