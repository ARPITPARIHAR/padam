@extends('admin.layouts.app')

@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">

    <div class="row">
        <div class="col-xl-12 col-lg-12 ">
            <!-- The form action is pointing to the update route, with the method set to PUT -->
            <form id="csrForm" action="{{ route('admin.csr.update', $csr->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Include PUT method for update -->

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit CSR Details</h4>
                    </div>
                    <div class="card-body">
                        <!-- CSR Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">CSR Name</label>
                            <input type="text" id="name" name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Enter CSR Name" value="{{ old('name', $csr->name) }}" required />
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- CSR Year -->
                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <input type="text" id="year" name="year"
                                   class="form-control @error('year') is-invalid @enderror"
                                   placeholder="Enter Year" value="{{ old('year', $csr->year) }}" required />
                            @error('year')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-outline-secondary w-100">Update CSR</button>
                        </div>
                        <div class="col-lg-2">
                            <a href="{{ route('admin.csr.index') }}" class="btn btn-primary w-100">Cancel</a>
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
        document.getElementById('csrForm').reset(); // Reset the form
    }
</script>

@endsection
