@extends('admin.layouts.app')
@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12 col-lg-12 ">
            <form action="{{ route('admin.project.store.updated') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add A Project</h4>
                    </div>
                    <div class="card-body">
                        <label for="location-title" class="form-label">Add Project Image(s)</label>
                        <input name="projectImages[]"
                            class="form-control @error('projectImages.*') is-invalid @enderror" type="file"
                            accept=".png, .jpeg, .jpg" multiple />
                        @error('projectImages.*')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <?php
                    $projectImages = $project['image'] ? explode(',', $project['image']) : [] ;
                    ?>
                    @if(!empty($projectImages))
                    <div class="row card-body" id="imageRow">
                        @foreach ($projectImages as $key=>$pImage)
                        <div class="col-md-3" id="projectImageDiv{{$key}}">
                            <div class="image-container">
                                <span class="remove-icon">
                                    <a href="javascript:void(0);" onclick="removeProjectImage(this.id)"
                                        id="projectImage{{$key}}" data-id="{{$key}}" data-name="{{$pImage}}"
                                        data-url="{{URL::to('/')}}/project/image/remove" data-src="{{$project['id']}}"
                                        data-type="projectImageDiv{{$key}}" data-image-column="image">×</a>
                                </span>
                                <img class="img-thumbnail" src="{{asset($pImage)}}" alt="project Image">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    <div class="card-body">
                        <label for="location-title" class="form-label">Add A Featured Image Of Project</label>
                        <input name="featuredImage" class="form-control @error('featuredImage') is-invalid @enderror"
                            type="file" accept=".png, .jpeg, .jpg" />
                        @error('featuredImage')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    @if($project['featuredImage']!='')
                    <div class="row card-body" id="featuredImageRow">
                        <div class="col-md-3" id="featuredImageDiv{{$key}}">
                            <div class="image-container">
                                <span class="remove-icon">
                                    <a href="javascript:void(0);" onclick="removeProjectImage(this.id)"
                                        id="featuredImage{{$key}}" data-id="{{$key}}"
                                        data-name="{{$project['featuredImage']}}"
                                        data-url="{{URL::to('/')}}/project/image/remove" data-src="{{$project['id']}}"
                                        data-type="featuredImageDiv{{$key}}" data-image-column="featuredImage">×</a>
                                </span>
                                <img class="img-thumbnail" src="{{asset($project['featuredImage'])}}"
                                    alt="project Image">
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Project Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Product Title</label>
                                    <input type="hidden" name="id" value="{{$project['id']}}" />
                                    <input type="text" id="title" name="title"
                                        class="form-control capitalize @error('title') is-invalid @enderror"
                                        placeholder="Project Title" value="{{$project['title']}}" required />
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Area(in sq.ft.)</label>
                                    <input type="text" name="area" value="{{$project['area']}}"
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
                                    <option value="{{$sector['id']}}"
                                        {{ ( $sector['id'] == $project['sectorId']) ? 'selected' : '' }}>
                                        {{$sector['title']}}
                                    </option>
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
                                    <option value="{{$location['id']}}"
                                        {{ ( $location['id'] == $project['locationId']) ? 'selected' : '' }}>
                                        {{$location['title']}}</option>
                                    @endforeach
                                </select>
                                @error('locationId')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
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