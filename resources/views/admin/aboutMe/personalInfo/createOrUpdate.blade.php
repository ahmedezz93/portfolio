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

@section('title',__('settings.settings'))

@section('content')
    <div class="card mb-4">

        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">{{ __('settings.Website Info') }}</h5>
        </div>
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <form class="card-body" action="{{ route('admin.settings.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <h5 class="text-center">{{ __('settings.Website Info') }}</h5>
                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name Arabic">First Name</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="first_name" class="form-control"
                            value="{{ old('first_name', isset($settings) ? $settings->first_name : '') }}" />
                        @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name Arabic">Last Name</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="last_name" class="form-control"
                            value="{{ old('last_name', isset($settings) ? $settings->last_name : '') }}" />
                        @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group">
                        <div>
                            <label class="form-label" for="formFile">Image</label>
                            <small class="text-muted">Recommended size: 512px × 512px</small>
                            <input class="form-control" type="file" name="image" id="formFile" />
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (isset($settings) && $settings->image_url)
                            <img src="{{ $settings->image_url ?? '' }}" class="icon-preview" alt="image">
                        @endif
                    </div>


                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name Arabic">Date Of Birth</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="last_name" class="form-control"
                            value="{{ old('last_name', isset($settings) ? $settings->last_name : '') }}" />
                        @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Nationality">Nationality</label>
                        <input type="text" id="multicol-Website-Nationality" name="nationality" class="form-control"
                            value="{{ old('nationality', isset($settings) ? $settings->nationality : '') }}" />
                        @error('nationality')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Freelance">Freelance</label>
                        <input type="text" id="multicol-Website-Freelance" name="nationality" class="form-control"
                            value="{{ old('nationality', isset($settings) ? $settings->nationality : '') }}" />
                        @error('nationality')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Phone">Phone</label>
                        <input type="text" id="multicol-Website Phone" name="phone" class="form-control"
                            value="{{ old('phone', isset($settings) ? $settings->phone : '') }}" />
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-email">Email</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-email" name="email" class="form-control"
                                value="{{ old('email', isset($settings) ? $settings->email : '') }}" aria-label=""
                                aria-describedby="multicol-email2" />
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-address">address</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-address" name="address" class="form-control"
                                value="{{ old('address', isset($settings) ? $settings->address : '') }}" aria-label=""
                                aria-describedby="multicol-address2" />
                        </div>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-spoken_languages">Spoken Langauages</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-spoken_languages" name="spoken_languages" class="form-control"
                                value="{{ old('spoken_languages', isset($settings) ? $settings->spoken_languages : '') }}"
                                aria-label="" aria-describedby="multicol-spoken_languages2" />
                        </div>
                        @error('spoken_languages')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-linkedin">LinkedIn</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-linkedin" name="linkedin" class="form-control"
                                value="{{ old('linkedin', isset($settings) ? $settings->linkedin : '') }}"
                                aria-label="" aria-describedby="multicol-linkedin2" />
                        </div>
                        @error('linkedin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <br><br>
                    <h5 class="text-center">{{ __('settings.Videos & Icons & Logo') }}</h5>

                    <div class="col-md-6 form-group">
                        <div>
                            <label class="form-label" for="formFile">{{ __('settings.logo') }}</label>
                            <input class="form-control" type="file" name="logo" id="formFile" />
                            @error('logo')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (isset($settings) && $settings->logo_url)
                            <img src="{{ $settings->logo_url }}" class="icon-preview" alt="logo">
                        @endif
                    </div>


                    <div class="col-md-6 form-group">
                        <div>
                            <label class="form-label" for="formFile">{{ __('settings.header icon') }}</label>
                            <small class="text-muted">Recommended size: 512px × 512px</small>
                            <input class="form-control" type="file" name="header_icon" id="formFile" />

                            @error('header_icon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (isset($settings) && $settings->header_icon_url)
                            <img src="{{ $settings->header_icon_url ?? '' }}" class="icon-preview" alt="header_icon">
                        @endif
                    </div>



                    <div class="col-md-6 form-group">
                        <div>
                            <label class="form-label" for="formFile">{{ __('settings.footer icon') }}</label>
                            <small class="text-muted">Recommended size: 512px × 512px</small>
                            <input class="form-control" type="file" name="footer_icon" id="formFile" />
                            @error('footer_icon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (isset($settings) && $settings->footer_icon_url)
                            <img src="{{ $settings->footer_icon_url ?? '' }}" class="icon-preview" alt="footer_icon">
                        @endif
                    </div>

                    {{-- <div class="col-md-6 form-group">
                        <div>
                            <label class="form-label" for="video">{{ __('settings.video') }}</label>
                            <input class="form-control" type="file" name="video" id="video" />
                            @error('video')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (isset($settings) && $settings->video_url)
                            <img src="{{ $settings->video_url ?? '' }}" class="icon-preview"
                                alt="{{ __('settings.video') }}">
                        @endif
                    </div> --}}
                </div>
                <div class="pt-4" >
                    <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('general.save') }}</button>
                    <button type="reset" class="btn btn-label-danger ">{{ __('general.reset') }}</button>
                </div>
            </form>
        </div>

    @endsection


    @section('script')

    @endsection
