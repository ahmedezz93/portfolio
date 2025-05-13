@extends('admin.layouts.master')

@section('css')
    <style>
        .dropdown-menu {
            min-width: auto !important;
        }

        .custom-td {
            white-space: normal;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
            word-wrap: break-word;
            text-align: center;
            vertical-align: middle;
        }

        .modal-footer {
            display: flex;
            justify-content: space-evenly;
        }

        .modal-body {
            display: flex;
            justify-content: center;
        }

        .alert-info {
            display: flex;
            justify-content: end;
        }
    </style>
@endsection

@section('title', 'Manage Experiences')

@section('content')
    <div class="card p-3" id="print">

        <div class="row gy-3 mb-3">
            <div class="col-lg-4">
                <form action="{{ route('admin.experiences.index') }}" method="get" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control"
                        placeholder="Search By Job Title" style="margin-right: 10px;" />
                    <button type="submit" class="btn btn-warning">Search</button>
                </form>
            </div>
            <div class="col-lg-4">
                <form id="commentForm" method="get" action="{{ route('admin.experiences.index') }}"
                    class="d-flex align-items-center">
                    <select id="perPageSelect" name="per_page" class="form-select" style="margin-right: 10px;"
                        onchange="this.form.submit()">
                        <option value="">Items Per Page</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end">
                <a href="{{ route('admin.experiences.create') }}" class="btn btn-success ms-2">
                    <i class="ti ti-plus me-sm-1"></i> Add New Experience
                </a>

                <button class="btn btn-danger ms-2" id="btn_delete_all_modal" data-toggle="modal" data-target="#delete_all">
                    Delete All
                </button>
            </div>
        </div>

        <span class="border border-2"></span>

        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><input name="select_all" class="form-check-input" type="checkbox"
                                onclick="CheckAll('box1', this)" /></th>
                        <th class="custom-td">#</th>
                        <th class="custom-td">Job title</th>
                        <th class="custom-td">Company Name</th>
                        <th class="custom-td">Start Date</th>
                        <th class="custom-td">End Date</th>
                        <th class="custom-td">Description</th>
                        <th class="d-flex justify-content-center ">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($experiences as $experience)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input box1" type="checkbox" value="{{ $experience->id }}" />
                                </div>
                            </td>
                            <td class="custom-td">
                                {{ ($experiences->currentPage() - 1) * $experiences->perPage() + $loop->iteration }}</td>
                            <td class="custom-td">{{ $experience->job_title }}</td>
                            <td class="custom-td">
                                {{ $experience->company_name }}</td>
                            <td class="custom-td">
                                {{ $experience->start_date }}</td>
                            <td class="custom-td">
                                {{ $experience->end_date }}</td>
                            <td class="custom-td">
                                {{ $experience->description }}
                            </td>

                            <td class="custom-td">
                                <div class="d-flex justify-content-center">
                                    <!-- Dropdown Menu -->
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton{{ $experience->id }}" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $experience->id }}">
                                            <!-- Edit Button -->
                                            <li>
                                                <a href="{{ route('admin.experiences.edit', $experience->id) }}"
                                                    class="dropdown-item">
                                                    <i class="ti ti-pencil me-1"></i> Edit
                                                </a>
                                            </li>
                                            <!-- Delete Button with Modal Trigger -->
                                            <li>
                                                <button type="button" class="dropdown-item text-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteServiceModal{{ $experience->id }}">
                                                    <i class="ti ti-trash me-1"></i> Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Delete Confirmation Modal for Each Project -->
                        <div class="modal fade" id="deleteServiceModal{{ $experience->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-white text-dark dark:bg-dark dark:text-white">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Item</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this item?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form id="deleteServiceForm{{ $experience->id }}" method="POST"
                                            action="{{ route('admin.experiences.destroy', $experience->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-success">Confirm Delete</button>
                                        </form>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            @endforeach
                </tbody>
            </table>
        </div>

        {{ $experiences->appends(Request::except(['_token']))->links() }}

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Event handler for delete button
            $('.btn_delete_service').click(function() {
                // Get experience id from data-id attribute
                var serviceId = $(this).data('id');

                // Update form action with experience ID
                var deleteUrl = "{{ route('admin.experiences.destroy', ':id') }}";
                deleteUrl = deleteUrl.replace(':id', serviceId);

                $('#deleteServiceForm').attr('action', deleteUrl);

                // Show the modal
                $('#deleteServiceModal').modal('show');
            });
        });
    </script>
    <script>
        var deleteRoute = "{{ route('admin.experiences.destroy.all') }}";
    </script>

@endsection
