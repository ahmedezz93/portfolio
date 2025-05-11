@extends('admin.layouts.master')
@section('css')
@endsection

@section('title', 'admins')

@section('content')
    <div class="card" id="print">
        <div class="d-flex justify-content-end align-items-center mb-3" style="margin-right: 10px; margin-top: 30px;">
            <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    تصدير البيانات
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{ route('admins.admins.export.xlsx') }}"><i
                                class="ti ti-file-export me-sm-1"></i> تصدير </a></li>
                    <li><a class="dropdown-item" href="#" id="print_Button" onclick="printDiv()"><i
                                class="ti ti-printer me-1"></i> طباعه</a></li>
                    <li><a class="dropdown-item" href="{{ route('admins.admins.export.csv') }}"><i
                                class="ti ti-file-text me-1"></i>  اكسيل </a></li>
                </ul>
            </div>
            <a href="{{ route('admins.admins.create') }}" class="btn btn-success ms-2">
                <i class="ti ti-plus me-sm-1"></i> اضافة مستخدم جديد
            </a>
            <button type="button" class="btn btn-danger ms-2" id="btn_delete_all_modal" data-toggle="modal"
                data-target="#delete_all">
                حذف الكل
            </button>
        </div>



        <div class="alert alert-danger" role="alert">
            <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
               فهرس المستخدمين
            </div>
        </div>






        <div class="table-responsive text-nowrap">
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><input name="select_all" class="form-check-input" id="example-select-all" type="checkbox"
                                onclick="CheckAll('box1', this)" /></th>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>الصورة الشخصية</th>
                        <th>البريد الالكترونى</th>
                        <th>النوع</th>

                        <th class="manage-column">الاجراءات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @isset($admins)
                        @foreach ($admins as $admin)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input box1" type="checkbox" value="{{ $admin->id }}" />
                                    </div>

                                </td>

                                <td>{{ ($admins->currentPage() - 1) * $admins->perPage() + $loop->iteration }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>
                                    <div class="rounded-user-image" style="background-image: url('{{ $admin->image_url }}');">
                                    </div>
                                </td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->status_value }}</td>

                                <td class="manage-column">
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admins.admins.edit', $admin->id) }}"><i
                                                    class="ti ti-pencil me-1"></i> تعديل </a>
                                            <a class="dropdown-item" href="{{ route('admins.admins.destroy', $admin->id) }}"><i
                                                    class="ti ti-trash me-1"></i> حذف</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div><br>
        {{ $admins->appends(Request::except(['_token']))->links() }}
    </div>

@endsection
@section('script')

<!---------destroy selected items ------------>
<script>
    var deleteRoute = "{{ route('admins.admins.destroy.all') }}";
</script>

@endsection
