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

@section('title', __('contact.manage_messages'))

@section('content')
    <div class="card p-3" id="print">
        <div class="row gy-3 mb-3">
            <div class="col-lg-4">
                <form action="{{ route('admin.contacts.index') }}" method="get" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control"
                        placeholder="{{ __('contact.search_placeholder') }}" style="margin-right: 10px;" />
                    <button type="submit" class="btn btn-warning">{{ __('contact.search') }}</button>
                </form>
            </div>
            <div class="col-lg-4">
                <form id="commentForm" method="get" action="{{ route('admin.contacts.index') }}"
                    class="d-flex align-items-center">
                    <select id="perPageSelect" name="per_page" class="form-select" style="margin-right: 10px;"
                        onchange="this.form.submit()">
                        <option value="">{{ __('contact.items_per_page') }}</option>
                        <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                        <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end">
                <button class="btn btn-danger ms-2" id="btn_delete_all_modal" data-toggle="modal" data-target="#delete_all">
                    {{ __('contact.delete_all') }}
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
                        <th class="text-center">{{ __('contact.name') }}</th>
                        <th class="text-center">{{ __('contact.email') }}</th>
                        <th class="text-center">{{ __('teams.phone') }}</th>
                        <th class="text-center">{{ __('contact.message') }}</th>
                        <th class="text-center">{{ __('contact.received_at') }}</th>
                        <th class="d-flex justify-content-center">{{ __('contact.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input box1" type="checkbox" value="{{ $contact->id }}" />
                                </div>
                            </td>
                            <td>{{ ($contacts->currentPage() - 1) * $contacts->perPage() + $loop->iteration }}</td>
                            <td class="text-center">{{ $contact->name }} </td>
                            <td class="text-center">{{ $contact->email }}</td>
                            <td class="text-center">{{ $contact->phone }}</td>
                            <td class="custom-td">{{ $contact->message }}</td>
                            <td class="text-center">{{ $contact->created_at->format('Y-m-d') }}</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteContactModal{{ $contact->id }}">
                                        <i class="ti ti-trash me-1"></i> {{ __('contact.delete') }}
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="deleteContactModal{{ $contact->id }}" tabindex="-1"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('contact.delete_message') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('contact.delete_confirmation') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{ route('admin.contacts.destroy', $contact->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-success">{{ __('contact.confirm_delete') }}</button>
                                        </form>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">{{ __('contact.cancel') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $contacts->appends(Request::except(['_token']))->links() }}
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.btn_delete_contact').click(function() {
                var contactId = $(this).data('id');
                var deleteUrl = "{{ route('admin.contacts.destroy', ':id') }}".replace(':id', contactId);
                $('#deleteContactForm').attr('action', deleteUrl);
                $('#deleteContactModal').modal('show');
            });
        });
    </script>


@section('script')
    <script>
        $(document).ready(function() {
            // Event handler for delete button
            $('.btn_delete_service').click(function() {
                // Get project id from data-id attribute
                var serviceId = $(this).data('id');

                // Update form action with project ID
                var deleteUrl = "{{ route('admin.contacts.destroy', ':id') }}";
                deleteUrl = deleteUrl.replace(':id', serviceId);

                $('#deleteServiceForm').attr('action', deleteUrl);

                // Show the modal
                $('#deleteServiceModal').modal('show');
            });
        });
    </script>
    <script>
        var deleteRoute = "{{ route('admin.contacts.destroy.all') }}";
    </script>

@endsection

@endsection
