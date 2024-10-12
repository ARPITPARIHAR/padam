@extends('admin.layouts.app')

@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">

    <div class="row">
        <div class="col-xl-12 col-lg-12 ">
            <form id="newsForm" action="{{ route('admin.csr.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Csr Details</h4>
                    </div>
                    <div class="card-body">
                        <!-- Image Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Csr Name</label>
                            <input type="text" id="name" name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Enter Csr Name" value="{{ old('name') }}" required />
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Upload Image -->
                     
                        <div class="mb-3">
                            <label for="name" class="form-label">Year</label>
                            <input type="text" id="name" name="year"
                                   class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Enter Year" value="{{ old('year') }}" required />
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       

                        <!-- Image Link -->
                       
                        
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-outline-secondary w-100">Add Csr</button>
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
