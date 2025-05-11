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

@section('title', __('users.manage_users'))

@section('content')
    <div class="card p-3" id="print">

        <div class="row gy-3 mb-3">
            <div class="col-lg-4">
                <form action="{{ route('admin.users.index') }}" method="get" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control" placeholder="{{ __('users.search_by_name') }}"
                        style="margin-right: 10px;" />
                    <button type="submit" class="btn btn-warning">{{ __('users.search_button') }}</button>
                </form>
            </div>
            <div class="col-lg-4">
                <form id="commentForm" method="get" action="{{ route('admin.users.index') }}"
                    class="d-flex align-items-center">
                    <select id="perPageSelect" name="per_page" class="form-select" style="margin-right: 10px;"
                        onchange="this.form.submit()">
                        <option value="">{{ __('users.items_per_page') }}</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end">
                <a href="{{ route('admin.users.create') }}" class="btn btn-success ms-2">
                    <i class="ti ti-plus me-sm-1"></i> {{ __('users.add_new_user') }}
                </a>
                <button class="btn btn-danger ms-2" id="btn_delete_all_modal" data-toggle="modal" data-target="#delete_all">
                    {{ __('users.delete_all') }}
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
                        <th class="custom-td"> {{ __('users.name') }}</th>
                        <th class="custom-td">{{ __('users.email') }}</th>
                        <th class="custom-td ">{{ __('users.image') }}</th>

                        <th class="d-flex justify-content-center">{{ __('users.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                        <tr>
                            <td class="custom-td">
                                <div class="form-check">
                                    <input class="form-check-input box1" type="checkbox" value="{{ $user->id }}" />
                                </div>
                            </td>
                            <td class="custom-td">{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}
                            </td>
                            <td class="custom-td">
                                {{ $user->getTranslation('name', app()->getLocale()) ?? $user->name }}
                            </td>
                            <td class="custom-td">{{ $user->email }}</td>
                            <td class="custom-td "><img src="{{ $user->image_url }}" width="90" height="111"
                                    alt=""></td>
                            <td class="custom-td">
                                <div class="d-flex gap-2 justify-content-center">
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-sm">
                                        <i class="ti ti-pencil me-1"></i> {{ __('users.edit') }}
                                    </a>
                                    <!-- Delete Button -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteTeamModal{{ $user->id }}">
                                        <i class="ti ti-trash me-1"></i> {{ __('users.delete') }}
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Delete Confirmation Modal for Each User -->
                        <div class="modal fade" id="deleteTeamModal{{ $user->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('users.delete_item') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('users.confirm_delete') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Form with Action Set for Deletion -->
                                        <form id="deleteTeamForm{{ $user->id }}" method="POST"
                                            action="{{ route('admin.users.destroy', $user->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-success">{{ __('users.confirm_delete_button') }}</button>
                                        </form>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">{{ __('users.cancel') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $users->appends(Request::except(['_token']))->links() }}

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Event handler for delete button
            $('.btn_delete_team').click(function() {
                // Get user id from data-id attribute
                var teamId = $(this).data('id');

                // Update form action with user ID
                var deleteUrl = "{{ route('admin.users.destroy', ':id') }}";
                deleteUrl = deleteUrl.replace(':id', teamId);

                $('#deleteTeamForm').attr('action', deleteUrl);

                // Show the modal
                $('#deleteTeamModal').modal('show');
            });
        });
    </script>
    <script>
        var deleteRoute = "{{ route('admin.users.destroy.all') }}";
    </script>

@endsection
