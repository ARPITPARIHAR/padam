@extends('backend.layouts.app')

@section('meta_title', __('Category Update'))

@section('page_name', __('Category Update'))

{{-- @section('page_description', __('This is the participation table page displaying all records.')) --}}

@section('name')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">{{ __('CATEGORY UPDATE') }}</a></li>
@endsection

@section('content')
    <div class="container">
        <h3>Add New Category</h3>

        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" name="category" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>

@endsection

@section('scripts')
    <!-- Place for additional scripts if needed -->
@endsection

@section('styles')
    <!-- Place for additional styles if needed -->
@endsection
