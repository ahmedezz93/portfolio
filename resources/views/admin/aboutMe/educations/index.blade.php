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

@section('title', 'Manage Educations')

@section('content')
    <div class="card p-3" id="print">

        <div class="row gy-3 mb-3">
            <div class="col-lg-4">
                <form action="{{ route('admin.educations.index') }}" method="get" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control"
                        placeholder="Search By Degree" style="margin-right: 10px;" />
                    <button type="submit" class="btn btn-warning">Search</button>
                </form>
            </div>
            <div class="col-lg-4">
                <form id="commentForm" method="get" action="{{ route('admin.educations.index') }}"
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
                <a href="{{ route('admin.educations.create') }}" class="btn btn-success ms-2">
                    <i class="ti ti-plus me-sm-1"></i> Add New Education
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
                        <th class="custom-td">Degree</th>
                        <th class="custom-td">Institution</th>
                        <th class="custom-td">Start Date</th>
                        <th class="custom-td">End Date</th>
                        <th class="custom-td">Description</th>
                        <th class="d-flex justify-content-center ">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($educations as $education)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input box1" type="checkbox" value="{{ $education->id }}" />
                                </div>
                            </td>
                            <td class="custom-td">
                                {{ ($educations->currentPage() - 1) * $educations->perPage() + $loop->iteration }}</td>
                            <td class="custom-td">{{ $education->degree }}</td>
                            <td class="custom-td">
                                {{ $education->institution }}</td>
                            <td class="custom-td">
                                {{ $education->start_date }}</td>
                            <td class="custom-td">
                                {{ $education->end_date }}</td>
                            <td class="custom-td">
                                {{ $education->description }}
                            </td>

                            <td class="custom-td">
                                <div class="d-flex justify-content-center">
                                    <!-- Dropdown Menu -->
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton{{ $education->id }}" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $education->id }}">
                                            <!-- Edit Button -->
                                            <li>
                                                <a href="{{ route('admin.educations.edit', $education->id) }}"
                                                    class="dropdown-item">
                                                    <i class="ti ti-pencil me-1"></i> Edit
                                                </a>
                                            </li>
                                            <!-- Delete Button with Modal Trigger -->
                                            <li>
                                                <button type="button" class="dropdown-item text-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteServiceModal{{ $education->id }}">
                                                    <i class="ti ti-trash me-1"></i> Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Delete Confirmation Modal for Each Project -->
                        <div class="modal fade" id="deleteServiceModal{{ $education->id }}" tabindex="-1" aria-hidden="true">
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
                                        <form id="deleteServiceForm{{ $education->id }}" method="POST"
                                            action="{{ route('admin.educations.destroy', $education->id) }}">
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

        {{ $educations->appends(Request::except(['_token']))->links() }}

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Event handler for delete button
            $('.btn_delete_service').click(function() {
                // Get education id from data-id attribute
                var serviceId = $(this).data('id');

                // Update form action with education ID
                var deleteUrl = "{{ route('admin.educations.destroy', ':id') }}";
                deleteUrl = deleteUrl.replace(':id', serviceId);

                $('#deleteServiceForm').attr('action', deleteUrl);

                // Show the modal
                $('#deleteServiceModal').modal('show');
            });
        });
    </script>
    <script>
        var deleteRoute = "{{ route('admin.educations.destroy.all') }}";
    </script>

@endsection
