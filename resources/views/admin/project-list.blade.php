@extends('admin.layouts.app')
@section('content')

<!-- Start Container Fluid -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">All Project List</h4>

                    <a href="{{route('admin.project.add')}}" class="btn btn-sm btn-primary">
                        Add A Project
                    </a>

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            This Month
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="#!" class="dropdown-item">Download</a>
                            <!-- item-->
                            <a href="#!" class="dropdown-item">Export</a>
                            <!-- item-->
                            <a href="#!" class="dropdown-item">Import</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check ms-1">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <th>Project Title & Location</th>
                                    <th>Sector</th>
                                    <th>Area(sq.ft.)</th>
                                    <th>Created On</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>
                                        <div class="form-check ms-1">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div
                                                class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                <img src="{{asset($project['featuredImage'])}}" alt=""
                                                    class="avatar-md">
                                            </div>

                                            <div>
                                                <a href="#!" class="text-dark fw-medium fs-15">{{$project['title']}}</a>
                                                <p class="text-muted mb-0 mt-1 fs-13"><span>Location :
                                                    </span>{{$project['locationTitle']}}</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td>{{$project['sectorTitle']}}</td>
                                    <td>{{number_format($project['area'])}}</td>
                                    @php
                                    $date = date('dS M, Y', strtotime($project['created_at']));
                                    @endphp
                                    <td>
                                        <p class="mb-1 text-muted"><span class="text-dark fw-medium">{{$date}}</span>
                                        </p>
                                    </td>
                                    <td> {{$project['status']==1 ? 'Active' : 'Inactive'}}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <!-- <a href="#!" class="btn btn-light btn-sm">
                                                <iconify-icon icon="solar:eye-broken" class="align-middle fs-18">
                                                </iconify-icon>
                                            </a> -->
                                            <a href="{{url('project/update')}}/{{$project['id']}}/{{$project['slug']}}"
                                                class="btn btn-soft-primary btn-sm">
                                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18">
                                                </iconify-icon>
                                            </a>
                                            <a class="btn btn-soft-danger btn-sm"
                                                onclick="deleteConfirmation({{$project['id']}}, 'project')" href="#">
                                                <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                    class="align-middle fs-18"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
                <div class="card-footer border-top">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Container Fluid -->
@endsection