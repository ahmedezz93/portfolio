@extends('admin.layouts.master')
@section('css')
    <style>
        .icon-preview {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-left: 10px;
            object-fit: cover;
            margin-top: 25px;

        }


        .text-center {
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
            /* زيادة حجم الخط */
            color: #cfd3ec;
            /* لون النص */
            padding: 10px;
            background-color: #274c62;
            /* خلفية فاتحة للصندوق */
            border-radius: 8px;
            /* حدود مستديرة للصندوق */
            margin-top: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* إضافة ظل للصندوق */
            display: inline-block;
            /* جعل الصندوق بحجم النص فقط */
            width: 100%;
        }

        /*
        * style for input color
        */
        .color-picker-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 5px;
        }

        .color-input {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .color-preview {
            padding: 0;
            overflow: hidden;
            width: 45px;
            height: 45px;
            cursor: pointer;
            border-left: none;
        }

        .color-picker {
            width: 100%;
            height: 100%;
            border: none;
            cursor: pointer;
            background: transparent;
            padding: 0;
        }
    </style>

@endsection

@section('title', 'Account Setting')

@section('content')
    <div class="card mb-4">

        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">Account Setting</h5>
        </div>
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <form class="card-body" action="{{ route('admin.account.setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-email">{{ __('settings.Email') }}</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-email" name="email" class="form-control"
                                value="{{ old('email', isset($user) ? $user->email : '') }}" aria-label=""
                                aria-describedby="multicol-email2" />
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website-Password">Password</label>
                        <input type="password" id="multicol-Website-Password" name="password" class="form-control" />
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website-Password-Confirmation">Confirm Password</label>
                        <input type="password" id="multicol-Website-Password-Confirmation" name="password_confirmation"
                            class="form-control" />
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="pt-4" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                    <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('general.save') }}</button>
                    <button type="reset" class="btn btn-label-danger ">{{ __('general.reset') }}</button>
                </div>
            </form>
        </div>

    @endsection


    @section('script')

    @endsection
