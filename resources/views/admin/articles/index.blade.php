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

@section('title', __('articles.manage_articles'))

@section('content')
    <div class="card p-3" id="print">
        <div class="row gy-3 mb-3">
            <div class="col-lg-4">
                <form action="{{ route('admin.articles.index') }}" method="get" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control"
                        placeholder="{{ __('articles.search_by_title') }}" style="margin-right: 10px;" />
                    <button type="submit" class="btn btn-warning">{{ __('articles.search') }}</button>
                </form>
            </div>
            <div class="col-lg-4">
                <form id="commentForm" method="get" action="{{ route('admin.articles.index') }}"
                    class="d-flex align-items-center">
                    <select id="perPageSelect" name="per_page" class="form-select" style="margin-right: 10px;"
                        onchange="this.form.submit()">
                        <option value="">{{ __('articles.items_per_page') }}</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end">
                <a href="{{ route('admin.articles.create') }}" class="btn btn-success ms-2">
                    <i class="ti ti-plus me-sm-1"></i> {{ __('articles.add_new_article') }}
                </a>
                <button class="btn btn-danger ms-2" id="btn_delete_all_modal" data-toggle="modal" data-target="#delete_all">
                    {{ __('articles.delete_all') }}
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
                        <th class="text-center">{{ __('articles.title') }}</th>
                        <th class="text-center">{{ __('articles.description') }}</th>
                        <th class="custom-td ">{{ __('articles.image') }}</th>

                        <th class="d-flex justify-content-center">{{ __('articles.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($articles as $article)
                        <tr>
                            <td><input class="form-check-input box1" type="checkbox" value="{{ $article->id }}" /></td>
                            <td>{{ ($articles->currentPage() - 1) * $articles->perPage() + $loop->iteration }}</td>
                            <td class="text-center">{{ $article->getTranslation('title', app()->getLocale() ?? '') }}</td>
                            <td class="custom-td">
                                {{ Str::limit(strip_tags(htmlspecialchars_decode($article->getTranslation('description', app()->getLocale()) ?? '')), 25) }}
                            </td>
                            <td class="custom-td "><img src="{{ $article->image_url }}" width="90" height="111" alt=""></td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('admin.articles.edit', $article->id) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="ti ti-pencil me-1"></i> {{ __('articles.edit') }}
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteServiceModal{{ $article->id }}">
                                        <i class="ti ti-trash me-1"></i> {{ __('articles.delete') }}
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Delete Confirmation Modal for Each Article -->
                        <div class="modal fade" id="deleteServiceModal{{ $article->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('articles.confirm_delete') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('articles.delete_item') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{ route('admin.articles.destroy', $article->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-success">{{ __('articles.confirm_delete') }}</button>
                                        </form>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('articles.cancel') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $articles->appends(Request::except(['_token']))->links() }}
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
                var deleteUrl = "{{ route('admin.articles.destroy', ':id') }}";
                deleteUrl = deleteUrl.replace(':id', serviceId);

                $('#deleteServiceForm').attr('action', deleteUrl);

                // Show the modal
                $('#deleteServiceModal').modal('show');
            });
        });
    </script>
    <script>
        var deleteRoute = "{{ route('admin.articles.destroy.all') }}";
    </script>

@endsection
