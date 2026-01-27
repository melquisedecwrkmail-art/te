@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Projects</h1>

    <a href="/admin/projects/create"
       class="bg-indigo-600 px-4 py-2 rounded hover:bg-indigo-500">
        + Add Project
    </a>
</div>

<table class="w-full bg-gray-900 rounded-lg overflow-hidden">
    <thead class="bg-gray-800">
        <tr>
            <th class="p-3 text-left">Title</th>
            <th class="p-3 text-left">Tech</th>
            <th class="p-3 text-right">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($projects as $project)
        <tr class="border-t border-gray-800">
            <td class="p-3">{{ $project->title }}</td>
            <td class="p-3">{{ $project->tech_stack }}</td>
            <td class="p-3 text-right space-x-3">
                <a href="/admin/projects/{{ $project->id }}/edit"
                   class="text-indigo-400 hover:underline">
                    Edit
                </a>

                <form action="/admin/projects/{{ $project->id }}"
                      method="POST"
                      class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-400 hover:underline">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
