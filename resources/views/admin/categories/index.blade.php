@extends('admin.layouts.master')
@section('css')

@endsection

@section('title', 'Categories')

@section('content')
    <div class="card" id="print">
        <div class="d-flex justify-content-end align-items-center mb-3" style="margin-right: 10px; margin-top: 30px;">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Export Options
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{ route('admins.categories.export.xlsx') }}"><i
                                class="ti ti-file-export me-sm-1"></i> Export</a></li>
                    <li><a class="dropdown-item" href="#" id="print_Button" onclick="printDiv()"><i
                                class="ti ti-printer me-1"></i> Print</a></li>
                    <li><a class="dropdown-item" href="{{ route('admins.categories.export.csv') }}"><i
                                class="ti ti-file-text me-1"></i> CSV</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-description me-1"></i> PDF</a></li>
                </ul>
            </div>
            <a href="{{ route('admins.categories.create') }}" class="btn btn-primary ms-2">
                <i class="ti ti-plus me-sm-1"></i> Add New Record
            </a>
            <button type="button" class="btn btn-danger ms-2" id="btn_delete_all_modal" data-toggle="modal"
            data-target="#delete_all">
            Delete All
        </button>

        </div>

        <h5 class="card-header">Categories</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><input name="select_all" class="form-check-input" id="example-select-all" type="checkbox"
                                onclick="CheckAll('box1', this)" /></th>

                        <th>#</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th class="manage-column">Manage</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @isset($categories)
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input box1" type="checkbox" value="{{ $category->id }}" />
                                    </div>
                                </td>

                                <td>{{ ($categories->currentPage() - 1) * $categories->perPage() + $loop->iteration }}</td>
                                <td>{{ $category->code }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('admins.categories.edit', $category->id) }}"><i
                                                    class="ti ti-pencil me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item"
                                                href="{{ route('admins.categories.destroy', $category->id) }}"><i
                                                    class="ti ti-trash me-1"></i>
                                                Delete</a>
                                            <a class="dropdown-item"
                                                href="{{ route('admins.categories.show', $category->id) }}"><i
                                                    class="ti ti-eye me-1"></i>
                                                show</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endisset

                </tbody>
            </table>
        </div>
        <br>
        {{ $categories->appends(Request::except(['_token']))->links() }}

    </div>
@endsection
@section('script')
<script>
    var deleteRoute = "{{ route('admins.categories.destroy.all') }}";
</script>


@endsection
