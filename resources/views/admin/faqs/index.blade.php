@extends('admin.layouts.master')

@section('title', __('faqs.manage_faqs'))
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

@section('content')
    <div class="card p-3" id="print">
        <div class="row gy-3 mb-3">
            <div class="col-lg-4">
                <form action="{{ route('admin.faqs.index', $section->id) }}" method="get" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control" placeholder="{{ __('faqs.search_faq') }}"
                        style="margin-right: 10px;" />
                    <button type="submit" class="btn btn-warning">{{ __('faqs.search_faq') }}</button>
                </form>
            </div>

            <div class="col-lg-4">
                <form id="commentForm" method="get" action="{{ route('admin.faqs.index', $section->id) }}"
                    class="d-flex align-items-center">
                    <select id="perPageSelect" name="per_page" class="form-select" style="margin-right: 10px;"
                        onchange="this.form.submit()">
                        <option value="">{{ __('faqs.items_per_page') }}</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                </form>
            </div>

            <div class="col-lg-4 d-flex justify-content-lg-end">
                <a href="{{ route('admin.faqs.create', $section->id) }}" class="btn btn-success ms-2">
                    <i class="ti ti-plus me-sm-1"></i> {{ __('faqs.add_new_faq') }}
                </a>
                <button class="btn btn-danger ms-2" id="btn_delete_all_modal" data-toggle="modal" data-target="#delete_all">
                    {{ __('faqs.delete_all') }}
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
                        <th class="text-center">{{ __('faqs.question') }}</th>
                        <th class="text-center">{{ __('faqs.answer') }}</th>
                        <th class="d-flex justify-content-center">{{ __('faqs.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faqs as $faq)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input box1" type="checkbox" value="{{ $faq->id }}" />
                                </div>
                            </td>

                            <td>{{ $loop->iteration }}</td>
                            <td  class="text-center">{{ $faq->getTranslation('question',app()->getLocale() ?? "") }}</td>
                            <td  class="text-center">{{ $faq->getTranslation('answer',app()->getLocale() ?? "") }}</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn btn-primary btn-sm">
                                        <i class="ti ti-pencil me-1"></i> {{ __('faqs.edit') }}
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteServiceModal{{ $faq->id }}">
                                        <i class="ti ti-trash me-1"></i> {{ __('faqs.delete') }}
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <div class="modal fade" id="deleteServiceModal{{ $faq->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('faqs.confirm_delete') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('faqs.delete_item') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{ route('admin.faqs.destroy', $faq->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-success">{{ __('faqs.confirm_delete') }}</button>
                                        </form>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('faqs.cancel') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $faqs->appends(Request::except(['_token']))->links() }}
    </div>
@endsection
@section('script')
    <script>
        var deleteRoute = "{{ route('admin.faqs.destroy.all') }}";
    </script>
@endsection
