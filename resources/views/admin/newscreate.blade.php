@extends('admin.layouts.app')

@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">

    <div class="row">
        <div class="col-xl-12 col-lg-12 ">
            <form id="newsForm" action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add News Details</h4>
                    </div>
                    <div class="card-body">
                        <!-- Image Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">News Name</label>
                            <input type="text" id="name" name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Enter News Name" value="{{ old('name') }}" required />
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Upload Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input name="image" type="file" accept=".png, .jpeg, .jpg" 
                                   class="form-control @error('image') is-invalid @enderror" required />
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" 
                                      class="form-control @error('description') is-invalid @enderror" 
                                      rows="3" required>{{ old('description') }}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Image Link -->
                        <div class="mb-3">
                            <label for="link" class="form-label">News Link</label>
                            <input type="url" id="link" name="link"
                                   class="form-control @error('link') is-invalid @enderror"
                                   placeholder="https://example.com" value="{{ old('link') }}" required />
                            @error('link')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-outline-secondary w-100">Add News</button>
                        </div>
                        <div class="col-lg-2">
                            <a href="#!" class="btn btn-primary w-100" onclick="clearForm()">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Container Fluid -->
<script>
    function clearForm() {
        document.getElementById('newsForm').reset(); // Reset the form
    }
</script>
@endsection
