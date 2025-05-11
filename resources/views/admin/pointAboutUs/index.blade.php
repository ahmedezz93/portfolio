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
    </style>
@endsection

@section('title', 'Manage Point AboutUs')

@section('content')
    <div class="card p-3" id="print">

        <div class="row gy-3 mb-3">
            <div class="col-lg-4">
                <form action="{{ route('admin.points.index') }}" method="get" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control" placeholder="Search by Point Title"
                        style="margin-right: 10px;" />
                    <button type="submit" class="btn btn-warning">Search</button>
                </form>
            </div>
            <div class="col-lg-4">
                <form id="commentForm" method="get" action="{{ route('admin.points.index') }}"
                    class="d-flex align-items-center">
                    <select id="perPageSelect" name="per_page" class="form-select" style="margin-right: 10px;"
                        onchange="this.form.submit()">
                        <option value="">Items per page</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end">
                <a href="{{ route('admin.points.create') }}" class="btn btn-success ms-2">
                    <i class="ti ti-plus me-sm-1"></i> Add New Point
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
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th class="d-flex justify-content-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($points as $point)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input box1" type="checkbox" value="{{ $point->id }}" />
                                </div>
                            </td>
                            <td>{{ ($points->currentPage() - 1) * $points->perPage() + $loop->iteration }}</td>
                            <td>{{ $point->title }}</td>
                            <td class="custom-td">{{ Str::limit($point->description, 50) }}</td>
                            <td>{{ $point->created_at->format('Y-m-d') }}</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.points.edit', $point->id) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="ti ti-pencil me-1"></i> Edit
                                    </a>


                                    <!-- Delete Button -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteServiceModal{{ $point->id }}">
                                        <i class="ti ti-trash me-1"></i> Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Delete Confirmation Modal for Each Point -->
                        <div class="modal fade" id="deleteServiceModal{{ $point->id }}" tabindex="-1"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Item</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>?Are you sure you want to delete this item</p>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Form with Action Set for Deletion -->
                                        <form id="deleteServiceForm{{ $point->id }}" method="POST"
                                            action="{{ route('admin.points.destroy', $point->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-success">Confirm Delete</button>
                                        </form>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $points->appends(Request::except(['_token']))->links() }}

    </div>
@endsection



@section('script')
    <script>
        $(document).ready(function() {
            // Event handler for delete button
            $('.btn_delete_service').click(function() {
                // Get point id from data-id attribute
                var serviceId = $(this).data('id');

                // Update form action with point ID
                var deleteUrl = "{{ route('admin.points.destroy', ':id') }}";
                deleteUrl = deleteUrl.replace(':id', serviceId);

                $('#deleteServiceForm').attr('action', deleteUrl);

                // Show the modal
                $('#deleteServiceModal').modal('show');
            });
        });
    </script>
    <script>
        var deleteRoute = "{{ route('admin.points.destroy.all') }}";
    </script>

@endsection
