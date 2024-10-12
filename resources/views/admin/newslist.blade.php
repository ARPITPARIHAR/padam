@extends('admin.layouts.app')

@section('content')

<!-- Start Container Fluid -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">All News List</h4>

                    <a href="{{ route('admin.news.add') }}" class="btn btn-sm btn-primary">
                        Add A News
                    </a>
                </div>
                <div>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($news as $item)
                                <tr>
                                    <td style="font-size: 16px;"> <!-- Adjusted font size -->
                                        <a href="#!" class="text-dark fw-medium">{{ $item->name }}</a>
                                    </td>
                                    <td>
                                        <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="avatar-md">
                                    </td>
                                    <td style="font-size: 16px;"> <!-- Adjusted font size -->
                                        <p class="text-muted mb-0 mt-1 fs-13">{{ $item->description }}</p>
                                    </td>
                                    <td style="font-size: 16px;"> <!-- Adjusted font size for status -->
                                        {{ $item->status == 1 ? 'Active' : 'Inactive' }} <!-- Display status -->
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-soft-primary btn-sm">
                                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                            </a>
                                            
                                            <a class="btn btn-soft-danger btn-sm" onclick="deleteConfirmation({{ $item->id }}, 'news')" href="#">
                                                <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
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
