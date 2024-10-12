@extends('admin.layouts.app')

@section('content')

<!-- Start Container Fluid -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">CSR List</h4>

                    <a href="{{ route('admin.csr.add') }}" class="btn btn-sm btn-primary">
                        Add A CSR Entry
                    </a>
                </div>
                <div>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th>CSR Name</th>
                                    <th>Year</th>
                                    <th>Status</th> <!-- New Status Column -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($csrs as $csr)
                                <tr>
                                    <td style="font-size: 16px;"> <!-- Adjusted font size -->
                                        <a href="#!" class="text-dark fw-medium">{{ $csr->name }}</a>
                                    </td>
                                    <td style="font-size: 16px;"> <!-- Adjusted font size -->
                                        {{ $csr->year }}
                                    </td>
                                    <td style="font-size: 16px;"> <!-- Adjusted font size for status -->
                                        {{ $csr->status == 1 ? 'Active' : 'Inactive' }} <!-- Display status -->
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.csr.edit', $csr->id) }}" class="btn btn-soft-primary btn-sm">
                                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                            </a>
                                            
                                            <a class="btn btn-soft-danger btn-sm" onclick="deleteConfirmation({{ $csr->id }}, 'csr')" href="#">
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
