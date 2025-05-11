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

        .alert-info{
        display: flex;
        justify-content: end;

    }
    </style>
@endsection

@section('title', __('services.manage_services'))

@section('content')
    <div class="card p-3" id="print">
        <div class="row gy-3 mb-3">
            <div class="col-lg-4">
                <form action="{{ route('admin.services.index') }}" method="get" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control" placeholder="{{ __('services.search_by_service_name') }}" style="margin-right: 10px;" />
                    <button type="submit" class="btn btn-warning">{{ __('services.search') }}</button>
                </form>
            </div>
            <div class="col-lg-4">
                <form id="commentForm" method="get" action="{{ route('admin.services.index') }}" class="d-flex align-items-center">
                    <select id="perPageSelect" name="per_page" class="form-select" style="margin-right: 10px;" onchange="this.form.submit()">
                        <option value="">{{ __('services.items_per_page') }}</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end">
                <a href="{{ route('admin.services.create') }}" class="btn btn-success ms-2">
                    <i class="ti ti-plus me-sm-1"></i> {{ __('services.add_new_service') }}
                </a>
                <button class="btn btn-danger ms-2" id="btn_delete_all_modal" data-toggle="modal" data-target="#delete_all">
                    {{ __('services.delete_all') }}
                </button>
            </div>
        </div>
        <span class="border border-2"></span>

        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><input name="select_all" class="form-check-input" type="checkbox" onclick="CheckAll('box1', this)" /></th>
                        <th>#</th>
                        <th class="text-center">{{ __('services.service_name') }}</th>
                        <th class="text-center">{{ __('services.description') }}</th>
                        <th class="text-center">{{ __('services.mini_description') }}</th>
                        <th class="d-flex justify-content-center">{{ __('services.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($services as $service)
                        <tr>
                            <td><input class="form-check-input box1" type="checkbox" value="{{ $service->id }}" /></td>
                            <td>{{ ($services->currentPage() - 1) * $services->perPage() + $loop->iteration }}</td>
                            <td class="text-center">{{ $service->getTranslation('name', app()->getLocale()) ?? '' }}</td>
                            <td class="custom-td text-center">
                                {{ Str::limit(strip_tags(html_entity_decode($service->getTranslation('description', app()->getLocale()))), 30) }}
                            </td>
                                                        <td class="custom-td">{{ Str::limit(strip_tags($service->getTranslation('mini_description', app()->getLocale())), 30) }}</td>
                                                        <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary btn-sm">
                                        <i class="ti ti-pencil me-1"></i> {{ __('services.edit') }}
                                    </a>
                                    {{-- <a href="{{ route('admin.service_details.getServiceWithDetaild', $service->id) }}" class="btn btn-primary btn-sm">
                                        <i class="ti ti-pencil me-1"></i> {{ __('services.service_details') }}
                                    </a> --}}
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteServiceModal{{ $service->id }}">
                                        <i class="ti ti-trash me-1"></i> {{ __('services.delete') }}
                                    </button>                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="deleteServiceModal{{ $service->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('services.confirm_delete') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('services.delete_item') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-success">{{ __('services.confirm_delete') }}</button>
                                        </form>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('services.cancel') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // Event handler for delete button
            $('.btn_delete_service').click(function() {
                // Get project id from data-id attribute
                var serviceId = $(this).data('id');

                // Update form action with project ID
                var deleteUrl = "{{ route('admin.services.destroy', ':id') }}";
                deleteUrl = deleteUrl.replace(':id', serviceId);

                $('#deleteServiceForm').attr('action', deleteUrl);

                // Show the modal
                $('#deleteServiceModal').modal('show');
            });
        });
    </script>
    <script>
        var deleteRoute = "{{ route('admin.services.destroy.all') }}";
    </script>

@endsection

