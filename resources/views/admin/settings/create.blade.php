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
                            for="multicol-Website Name Arabic">{{ __('settings.Website Name ar') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="name_ar" class="form-control"
                            value="{{ old('name_ar', isset($settings) ? $settings->getTranslation('name', 'ar') : '') }}" />
                        @error('name_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name Arabic">{{ __('settings.Website Name en') }}</label>
                        <input type="text" id="multicol-Website-Name-English" name="name_en" class="form-control"
                            value="{{ old('name_en', isset($settings) ? $settings->getTranslation('name', 'en') : '') }}" />
                        @error('name_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="multicol-email">{{ __('settings.Email') }}</label>
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
                        <label class="form-label" for="multicol-Website Name Arabic">{{ __('settings.Phone') }}</label>
                        <input type="text" id="multicol-Website Name Arabic" name="phone" class="form-control"
                            value="{{ old('phone', isset($settings) ? $settings->phone : '') }}" />
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="multicol-location_ar">{{ __('settings.Location ar') }}</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-location_ar" name="location_ar" class="form-control"
                                value="{{ old('location_ar', isset($settings) ? $settings->getTranslation('location', 'ar') : '') }}"
                                aria-label="" aria-describedby="multicol-location_ar2" />
                        </div>
                        @error('location_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-location_en">{{ __('settings.Location en') }}</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-location_en" name="location_en" class="form-control"
                                value="{{ old('location_en', isset($settings) ? $settings->getTranslation('location', 'en') : '') }}"
                                aria-label="" aria-describedby="multicol-location_en2" />
                        </div>
                        @error('location_en')
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
                    <br><br>

                    <h5 class="text-center">{{__('settings.Customize colors')}}</h5>

                    <div class="col-md-6">
                        <label class="form-label"> {{__('settings.secondary_color')}}</label>
                        <div class="input-group color-picker-wrapper">
                            <input type="text" class="form-control color-input" id="primary_color" name="primary_color"
                                value="{{ old('primary_color', $settings->primary_color ?? '') }}">
                            <span class="input-group-text color-preview">
                                <input type="color" class="form-control form-control-color color-picker"
                                    value="{{ old('primary_color', $settings->primary_color ?? '' ) }}"
                                    onchange="document.getElementById('primary_color').value = this.value">
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">{{__('settings.primary_color')}} </label>
                        <div class="input-group color-picker-wrapper">
                            <input type="text" class="form-control color-input" id="secondary_color" name="secondary_color"
                                value="{{ old('secondary_color', $settings->secondary_color  ?? "") }}">
                            <span class="input-group-text color-preview">
                                <input type="color" class="form-control form-control-color color-picker"
                                    value="{{ old('secondary_color', $settings->secondary_color ?? '' ) }}"
                                    onchange="document.getElementById('secondary_color').value = this.value">
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">{{__('settings.background_color')}} </label>
                        <div class="input-group color-picker-wrapper">
                            <input type="text" class="form-control color-input" id="background_color" name="background_color"
                                value="{{ old('background_color', $settings->background_color ?? '') }}">
                            <span class="input-group-text color-preview">
                                <input type="color" class="form-control form-control-color color-picker"
                                    value="{{ old('background_color', $settings->background_color ?? '' ) }}"
                                    onchange="document.getElementById('background_color').value = this.value">
                            </span>
                        </div>
                    </div>

                    <br><br>
                    <h5 class="text-center">{{ __('settings.Social Links') }}</h5>

                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name English">{{ __('settings.Facebook Link') }}</label>
                        <input type="text" id="multicol-Website Name English" name="facebook_link"
                            class="form-control"
                            value="{{ old('facebook_link', isset($settings) ? $settings->facebook_link : '') }}" />
                        @error('facebook_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name English">{{ __('settings.Twitter Link') }}</label>
                        <input type="text" id="multicol-Website Name English" name="twitter_link"
                            class="form-control"
                            value="{{ old('twitter_link', isset($settings) ? $settings->twitter_link : '') }}" />
                        @error('twitter_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name English">{{ __('settings.telegram Link') }}</label>
                        <input type="text" id="multicol-Website Name English" name="telegram_link"
                            class="form-control"
                            value="{{ old('telegram_link', isset($settings) ? $settings->telegram_link : '') }}" />
                        @error('telegram_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name English">{{ __('settings.Linkdin Link') }}</label>
                        <input type="text" id="multicol-Website Name English" name="linkedin_link"
                            class="form-control"
                            value="{{ old('linkedin_link', isset($settings) ? $settings->linkedin_link : '') }}" />
                        @error('linkedin_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name English">{{ __('settings.Youtube Link') }}</label>
                        <input type="text" id="multicol-Website Name English" name="youtube_link"
                            class="form-control"
                            value="{{ old('youtube_link', isset($settings) ? $settings->youtube_link : '') }}" />
                        @error('youtube_link')
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
