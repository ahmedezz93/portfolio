@extends('admin.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />

@endsection

@section('title', 'اضافة مستخدم')


@section('content')
    <div class="card mb-4">
        <h5 class="card-header">المستخدمين</h5>
        <form class="card-body" action="{{ route('admins.admins.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-Admin Code">الاسم</label>
                    <input type="text" id="multicol-Admin Code" name="name" class="form-control"
                        value="{{ old('name') }}" />
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

                <div class="col-md-6 form-group">
                    <div>
                        <label class="form-label" for="formFile">صورة المستخدم</label>
                        <input class="form-control" type="file" name="photo_profile" id="formFile" />
                        @error('photo_profile')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @if (isset($settings) && $settings->icon_url)
                        <img src="{{ $settings->icon_url }}" class="icon-preview" alt="icon">
                    @endif
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="multicol-Admin Name">البريد الالكترونى</label>
                    <input type="email" id="multicol-Admin Name" name="email" class="form-control"
                        value="{{ old('email') }}" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="userType" class="form-label">نوع المستخدم</label>
                    <select class="form-select" id="userType" name="status" aria-label="Default select example">
                        <option value="admin" @selected(old('status') == 'admin')>أدمن</option>
                        <option value="propeller" @selected(old('status') == 'propeller')>مسير</option>
                        <option value="institution" @selected(old('status') == 'institution')>مؤسسة</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6" id="workplaceField" style="display: none;">
                    <label for="workplaceSelect" class="form-label">المؤسسات</label>
                    <select class="form-select" id="workplaceSelect" name="workplace_id" aria-label="Default select example">
                        @if (isset($workplaces) && count($workplaces) > 0)
                            @foreach ($workplaces as $workplace)
                                <option value="{{ $workplace->id }}">{{ $workplace->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('workplace_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">حفظ</button>
            </div>
        </form>
    </div>
@endsection


@section('script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>

    <script>
    $(document).ready(function() {
        // Hide the workplace field initially
        $('#workplaceField').hide();

        // Show/Hide the workplace field based on the user type selection
        $('#userType').change(function() {
            var selectedValue = $(this).val();
            if (selectedValue === 'institution') {
                $('#workplaceField').show();
            } else {
                $('#workplaceField').hide();
            }
        });

        // Trigger change event on page load to set the correct visibility if there's an old value
        $('#userType').trigger('change');
    });

    </script>

@endsection
