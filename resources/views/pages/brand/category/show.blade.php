@extends('layouts.master')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow">
        <h1 class="text-xl font-semibold mb-4">Category Details</h1>

        <div class="mb-4">
            <strong>Name:</strong> {{ $brandCategory->name }}
        </div>

        <div class="mb-4">
            <strong>Description:</strong> {{ $brandCategory->description ?? 'No description' }}
        </div>

        <div class="mb-4">
            <strong>Status:</strong>
            <span class="{{ $brandCategory->is_active ? 'text-green-500' : 'text-red-500' }}">
            {{ $brandCategory->is_active ? 'Active' : 'Inactive' }}
        </span>
        </div>

        <a href="{{ route('brand_categories.index') }}" class="text-blue-500 hover:underline">Back to list</a>
    </div>
@endsection
