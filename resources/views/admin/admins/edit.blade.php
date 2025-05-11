@extends('admin.layouts.master')
@section('css')
    <style>
        .rounded-circle {
            border-radius: 50%;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />

@endsection

@section('title', 'تعديل المستخدم')


@section('content')
    <div class="card mb-4">
        <h5 class="card-header">المستخدمين</h5>
        <form class="card-body" action="{{ route('admins.admins.update', $admin->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div>





                    @if (isset($admin) && $admin->image_url)
                        <img src="{{ $admin->image_url }}" class="icon-preview rounded-circle "
                            style="width: 80px;height:80px;" alt="icon">
                    @endif
                </div>



                <div class="col-md-6 form-group">
                    <label class="form-label" for="formFile">صورة المستخدم</label>







                    <div class="position-relative">
                        <input class="form-control" type="file" name="photo_profile" id="formFile" />
                        @error('photo_profile')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>





                <div class="col-md-6">




                    <label class="form-label" for="multicol-Admin Code">الاسم</label>
                    <input type="text" id="multicol-Admin Code" name="name" class="form-control"
                        value="{{ old('name', $admin->name) }}" />
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="multicol-Admin Name">كلمة المرور</label>
                    <input type="password" id="multicol-Admin Name" name="password" class="form-control"
                        value="{{ old('password') }}" />
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="multicol-Admin Name">البريد الالكترونى</label>
                    <input type="email" id="multicol-Admin Name" name="email" class="form-control"
                        value="{{ old('email', $admin->email) }}" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">نوع المستخدم</label>
                    <select class="form-select" id="exampleFormControlSelect1" name="status"
                        aria-label="Default select example">
                        <option value="admin" @selected(old('status', $admin->status) == 'admin')>أدمن</option>
                        <option value="propeller" @selected(old('status', $admin->status) == 'propeller')>مسير</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>

@endsection
