@extends('admin.layouts.app')
@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12 col-lg-12 ">
            <form action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Project Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Product Title</label>
                                    <input type="text" id="title" name="title"
                                        class="form-control capitalize @error('title') is-invalid @enderror"
                                        placeholder="Project Title" value="{{old('title')}}" required />
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Area(in sq.ft.)</label>
                                    <input type="text" name="area" value="{{old('area')}}"
                                        class="form-control @error('area') is-invalid @enderror" placeholder="Area"
                                        required
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        onchange="validate(this)" placeholder="0.00" />
                                    @error('area')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="gender" class="form-label">Sectors</label>
                                <select class="form-control @error('sectorId') is-invalid @enderror" id="gender"
                                    name="sectorId" data-choices data-choices-groups data-placeholder="Select Sector"
                                    required>
                                    <option value="">Select Sector</option>
                                    @foreach($sectors as $sector)
                                    <option value="{{$sector['id']}}">{{$sector['title']}}</option>
                                    @endforeach
                                </select>
                                @error('sectorId')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="product-categories" class="form-label">Locations</label>
                                <select class="form-control @error('locationId') is-invalid @enderror" id=""
                                    data-choices data-choices-groups data-placeholder="Select Locations"
                                    name="locationId" required>
                                    <option value="">Choose a location</option>
                                    @foreach($locations as $location)
                                    <option value="{{$location['id']}}">{{$location['title']}}</option>
                                    @endforeach
                                </select>
                                @error('locationId')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add A Project</h4>
                    </div>
                    <div class="card-body">
                        <label for="location-title" class="form-label">Add Project Image(s)</label>
                        <input name="projectImages[]"
                            class="form-control @error('projectImages.*') is-invalid @enderror" type="file"
                            accept=".png, .jpeg, .jpg" required multiple />
                        @error('projectImages.*')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body">
                        <label for="location-title" class="form-label">Add A Featured Image Of Project</label>
                        <input name="featuredImage" class="form-control @error('featuredImage') is-invalid @enderror"
                            type="file" accept=".png, .jpeg, .jpg" required />
                        @error('featuredImage')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

              
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-outline-secondary w-100">Create Project</button>
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