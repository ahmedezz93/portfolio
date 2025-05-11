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

@section('title', __('sectionFaqs.manage_title'))

@section('content')
    <div class="card p-3" id="print">

        <div class="row gy-3 mb-3">
            <div class="col-lg-4">
                <form action="{{ route('admin.sectionFaqs.index') }}" method="get" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control"
                        placeholder="{{ __('sectionFaqs.search_placeholder') }}" style="margin-right: 10px;" />
                    <button type="submit" class="btn btn-warning">{{ __('sectionFaqs.search') }}</button>
                </form>
            </div>
            <div class="col-lg-4">
                <form id="commentForm" method="get" action="{{ route('admin.sectionFaqs.index') }}"
                    class="d-flex align-items-center">
                    <select id="perPageSelect" name="per_page" class="form-select" style="margin-right: 10px;"
                        onchange="this.form.submit()">
                        <option value="">{{ __('sectionFaqs.items_per_page') }}</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end">
                <a href="{{ route('admin.sectionFaqs.create') }}" class="btn btn-success ms-2">
                    <i class="ti ti-plus me-sm-1"></i> {{ __('sectionFaqs.add_new') }}
                </a>
                <button class="btn btn-danger ms-2" id="btn_delete_all_modal" data-toggle="modal" data-target="#delete_all">
                    {{ __('sectionFaqs.delete_all') }}
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
                        <th class="text-center">{{ __('sectionFaqs.name') }}</th>
                        <th class="d-flex justify-content-center">{{ __('sectionFaqs.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($sections as $section)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input box1" type="checkbox" value="{{ $section->id }}" />
                                </div>
                            </td>
                            <td>{{ ($sections->currentPage() - 1) * $sections->perPage() + $loop->iteration }}</td>
                            <td class="text-center">{{ $section->getTranslation('name', app()->getLocale() ?? ' ') }}</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.sectionFaqs.edit', $section->id) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="ti ti-pencil me-1"></i> {{ __('sectionFaqs.edit') }}
                                    </a>
                                    <a href="{{ route('admin.faqs.index', $section->id) }}" class="btn btn-primary btn-sm">
                                        <i class="ti ti-pencil me-1"></i> {{ __('sectionFaqs.show_faqs') }}
                                    </a>

                                    <!-- Delete Button -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteServiceModal{{ $section->id }}">
                                        <i class="ti ti-trash me-1"></i> {{ __('sectionFaqs.delete') }}
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Delete Confirmation Modal for Each Faq -->
                        <div class="modal fade" id="deleteServiceModal{{ $section->id }}" tabindex="-1"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('projects.Delete Item') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('projects.Are you sure you want to delete this item?') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Form with Action Set for Deletion -->
                                        <form id="deleteServiceForm{{ $section->id }}" method="POST"
                                            action="{{ route('admin.sectionFaqs.destroy', $section->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-success">{{ __('projects.Confirm Delete') }}</button>
                                        </form>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">{{ __('projects.Cancel') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $sections->appends(Request::except(['_token']))->links() }}

    </div>
@endsection

@section('script')
    <script>
        var deleteRoute = "{{ route('admin.sectionFaqs.destroy.all') }}";
    </script>
@endsection
