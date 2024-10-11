@extends('admin.layouts.app')
@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">

    <div class="row">
        <div class="col-xl-12 col-lg-12 ">
            <form action="{{route('admin.location.store')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Location</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="mb-3">
                                    <label for="location-title" class="form-label">Location Title</label>
                                    <input type="hidden" name="id" value="{{$location['id']}}">
                                    <input type="text" id="location-title"
                                        class="form-control capitalize @error('title') is-invalid @enderror" required
                                        value="{{$location['title']}}" name="title" placeholder="Enter Title" />
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-outline-secondary w-100">Save Changes</button>
                        </div>
                        <div class="col-lg-2">
                            <a href="#!" class="btn btn-primary w-100">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- End Container Fluid -->
@endsection