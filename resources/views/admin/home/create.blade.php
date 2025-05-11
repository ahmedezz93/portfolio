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
    </style>
@endsection

@section('title', __('home.home'))

@section('content')
    <div class="card mb-4">

        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">{{ __('home.Website Info') }}</h5>
        </div>
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <form class="card-body" action="{{ route('admin.home.updateOrCreate') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <h5 class="text-center">{{ __('home.first_part') }}</h5>


                    <img src="{{ asset('assets/site/const-images/first_zone.png') }}" alt="" width="5000px" height="500px">
                    <div class="col-md-12 form-group">
                        <div>
                            <label class="form-label" for="formFile">{{ __('home.first_zone_image') }}</label>
                            <input class="form-control" type="file" name="first_zone_image" id="formFile" />
                            @error('first_zone_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (isset($home) && $home->first_zone_image)
                            <img src="{{ $home->first_zone_image_url }}" class="icon-preview" alt="">
                        @endif
                    </div>



                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name Arabic">{{ __('home.first_zone_title_ar') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="first_zone_title_ar"
                            class="form-control"
                            value="{{ old('first_zone_title_ar', isset($home) ? $home->getTranslation('first_zone_title', 'ar') : '') }}" />
                        @error('first_zone_title_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name Arabic">{{ __('home.first_zone_title_en') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="first_zone_title_en"
                            class="form-control"
                            value="{{ old('first_zone_title_en', isset($home) ? $home->getTranslation('first_zone_title', 'en') : '') }}" />
                        @error('first_zone_title_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.first_zone_description_ar') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="first_zone_description_ar"
                            class="form-control"
                            value="{{ old('first_zone_description_ar', isset($home) ? $home->getTranslation('first_zone_description', 'ar') : '') }}" />
                        @error('first_zone_description_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name Arabic">{{ __('home.first_zone_description_en') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="first_zone_description_en"
                            class="form-control"
                            value="{{ old('first_zone_description_en', isset($home) ? $home->getTranslation('first_zone_description', 'en') : '') }}" />
                        @error('first_zone_description_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <br><br>
                    <h5 class="text-center">{{ __('home.second_part') }}</h5>

                    <img src="{{ asset('assets/site/const-images/second_zone.png') }}" alt="" width="5000px" height="500px">

                    <div class="col-md-12 form-group">
                        <div>
                            <label class="form-label" for="formFile">{{ __('home.second_zone_image') }} </label>
                            <small class="text-muted">{{__('general.recommended_size')}} : 588px × 551px</small>
                            <input class="form-control" type="file" name="second_zone_image" id="formFile" />
                            @error('second_zone_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (isset($home) && $home->second_zone_image)
                            <img src="{{ $home->second_zone_image_url }}" class="icon-preview" alt="">
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.second_zone_title_ar') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="second_zone_title_ar"
                            class="form-control"
                            value="{{ old('second_zone_title_ar', isset($home) ? $home->getTranslation('second_zone_title', 'ar') : '') }}" />
                        @error('second_zone_title_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.second_zone_title_en') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="second_zone_title_en"
                            class="form-control"
                            value="{{ old('second_zone_title_en', isset($home) ? $home->getTranslation('second_zone_title', 'en') : '') }}" />
                        @error('second_zone_title_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.second_zone_mini_description_ar') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="second_zone_mini_description_ar"
                            class="form-control"
                            value="{{ old('second_zone_mini_description_ar', isset($home) ? $home->getTranslation('second_zone_mini_description', 'ar') : '') }}" />
                        @error('second_zone_mini_description_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.second_zone_mini_description_en') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="second_zone_mini_description_en"
                            class="form-control"
                            value="{{ old('second_zone_mini_description_en', isset($home) ? $home->getTranslation('second_zone_mini_description', 'en') : '') }}" />
                        @error('second_zone_mini_description_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.second_zone_item_1_description_ar') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="second_zone_item_1_description_ar"
                            class="form-control"
                            value="{{ old('second_zone_item_1_description_ar', isset($home) ? $home->getTranslation('second_zone_item_1_description', 'ar') : '') }}" />
                        @error('second_zone_item_1_description_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.second_zone_item_1_description_en') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="second_zone_item_1_description_en"
                            class="form-control"
                            value="{{ old('second_zone_item_1_description_en', isset($home) ? $home->getTranslation('second_zone_item_1_description', 'en') : '') }}" />
                        @error('second_zone_item_1_description_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.second_zone_item_2_description_ar') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="second_zone_item_2_description_ar"
                            class="form-control"
                            value="{{ old('second_zone_item_2_description_ar', isset($home) ? $home->getTranslation('second_zone_item_2_description', 'ar') : '') }}" />
                        @error('second_zone_item_2_description_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.second_zone_item_2_description_en') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="second_zone_item_2_description_en"
                            class="form-control"
                            value="{{ old('second_zone_item_2_description_en', isset($home) ? $home->getTranslation('second_zone_item_2_description', 'en') : '') }}" />
                        @error('second_zone_item_2_description_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.second_zone_item_3_description_ar') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="second_zone_item_3_description_ar"
                            class="form-control"
                            value="{{ old('second_zone_item_3_description_ar', isset($home) ? $home->getTranslation('second_zone_item_3_description', 'ar') : '') }}" />
                        @error('second_zone_item_3_description_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">
                            {{ __('home.second_zone_item_3_description_en') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="second_zone_item_3_description_en"
                            class="form-control"
                            value="{{ old('second_zone_item_3_description_en', isset($home) ? $home->getTranslation('second_zone_item_3_description', 'en') : '') }}" />
                        @error('second_zone_item_3_description_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <br><br>
                    <h5 class="text-center">{{ __('home.third_part') }}</h5>

                    <img src="{{ asset('assets/site/const-images/third_zone.png') }}" alt="" width="5000px" height="500px">

                    <!------------------------------------------ item one in part3 --------------------------->


                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_title_item_one') }}</label>
                        <input type="text" name="third_zone_title_item_one" class="form-control"
                            value="{{ old('third_zone_title_item_one', isset($home) ? $home->third_zone_title_item_one: '') }}" />
                        @error('third_zone_title_item_one')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_mini_description_item_one_ar') }}</label>
                        <input type="text" name="third_zone_mini_description_item_one_ar" class="form-control"
                            value="{{ old('third_zone_mini_description_item_one_ar', isset($home) ? $home->getTranslation('third_zone_mini_description_item_one', 'ar') : '') }}" />
                        @error('third_zone_mini_description_item_one_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_mini_description_item_one_en') }}</label>
                        <input type="text" name="third_zone_mini_description_item_one_en" class="form-control"
                            value="{{ old('third_zone_mini_description_item_one_en', isset($home) ? $home->getTranslation('third_zone_mini_description_item_one', 'en') : '') }}" />
                        @error('third_zone_mini_description_item_one_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!------------------------------------------ item two in part3 --------------------------->


                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_title_item_two') }}</label>
                        <input type="text" name="third_zone_title_item_two" class="form-control"
                            value="{{ old('third_zone_title_item_two', isset($home) ? $home->third_zone_title_item_two : '') }}" />
                        @error('third_zone_title_item_two')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_mini_description_item_two_ar') }}</label>
                        <input type="text" name="third_zone_mini_description_item_two_ar" class="form-control"
                            value="{{ old('third_zone_mini_description_item_two_ar', isset($home) ? $home->getTranslation('third_zone_mini_description_item_two', 'ar') : '') }}" />
                        @error('third_zone_mini_description_item_two_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_mini_description_item_two_en') }}</label>
                        <input type="text" name="third_zone_mini_description_item_two_en" class="form-control"
                            value="{{ old('third_zone_mini_description_item_two_en', isset($home) ? $home->getTranslation('third_zone_mini_description_item_two', 'en') : '') }}" />
                        @error('third_zone_mini_description_item_two_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!------------------------------------------ item three in part3 --------------------------->


                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_title_item_three') }}</label>
                        <input type="text" name="third_zone_title_item_three" class="form-control"
                            value="{{ old('third_zone_title_item_three', isset($home) ? $home->third_zone_title_item_three : '') }}" />
                        @error('third_zone_title_item_three')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_mini_description_item_three_ar') }}</label>
                        <input type="text" name="third_zone_mini_description_item_three_ar" class="form-control"
                            value="{{ old('third_zone_mini_description_item_three_ar', isset($home) ? $home->getTranslation('third_zone_mini_description_item_three', 'ar') : '') }}" />
                        @error('third_zone_mini_description_item_three_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_mini_description_item_three_en') }}</label>
                        <input type="text" name="third_zone_mini_description_item_three_en" class="form-control"
                            value="{{ old('third_zone_mini_description_item_three_en', isset($home) ? $home->getTranslation('third_zone_mini_description_item_three', 'en') : '') }}" />
                        @error('third_zone_mini_description_item_three_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <!------------------------------------------ item four in part3 --------------------------->

                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_title_item_four') }}</label>
                        <input type="text" name="third_zone_title_item_four" class="form-control"
                            value="{{ old('third_zone_title_item_four', isset($home) ? $home->third_zone_title_item_four : '') }}" />
                        @error('third_zone_title_item_four')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_mini_description_item_four_ar') }}</label>
                        <input type="text" name="third_zone_mini_description_item_four_ar" class="form-control"
                            value="{{ old('third_zone_mini_description_item_four_ar', isset($home) ? $home->getTranslation('third_zone_mini_description_item_four', 'ar') : '') }}" />
                        @error('third_zone_mini_description_item_four_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">{{ __('home.third_zone_mini_description_item_four_en') }}</label>
                        <input type="text" name="third_zone_mini_description_item_four_en" class="form-control"
                            value="{{ old('third_zone_mini_description_item_four_en', isset($home) ? $home->getTranslation('third_zone_mini_description_item_four', 'en') : '') }}" />
                        @error('third_zone_mini_description_item_four_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!----------------------end of item four in part3 --------------------------->


                    <!-------------------------------------fourth part------------------------------------->


                    <h5 class="text-center">{{ __('home.fourth_part') }}</h5>


                    <img src="{{ asset('assets/site/const-images/fourth_zone.png') }}" alt="" width="5000px" height="500px">
                    <div class="col-md-12 form-group">
                        <div>
                            <label class="form-label" for="formFile">{{ __('home.fourth_zone_image') }}</label>
                            <small class="text-muted">{{__('general.recommended_size')}} : 528px × 553px</small>
                            <input class="form-control" type="file" name="fourth_zone_image" id="formFile" />
                            @error('fourth_zone_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (isset($home) && $home->fourth_zone_image)
                            <img src="{{ $home->fourth_zone_image_url }}" class="icon-preview" alt="">
                        @endif
                    </div>



                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name Arabic">{{ __('home.fourth_zone_title_ar') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="fourth_zone_title_ar"
                            class="form-control"
                            value="{{ old('fourth_zone_title_ar', isset($home) ? $home->getTranslation('fourth_zone_title', 'ar') : '') }}" />
                        @error('fourth_zone_title_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label"
                            for="multicol-Website Name Arabic">{{ __('home.fourth_zone_title_en') }}</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="fourth_zone_title_en"
                            class="form-control"
                            value="{{ old('fourth_zone_title_en', isset($home) ? $home->getTranslation('fourth_zone_title', 'en') : '') }}" />
                        @error('fourth_zone_title_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="fourth_zone_description_ar" class="form-label">{{ __('home.fourth_zone_description_ar') }}</label>
                        <textarea name="fourth_zone_description_ar" id="fourth_zone_description_ar" class="form-control">{{ old('fourth_zone_description_ar', $home->getTranslation('fourth_zone_description', 'ar') ?? '') }}</textarea>
                        @error('fourth_zone_description_ar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="fourth_zone_description_en" class="form-label">{{ __('home.fourth_zone_description_en') }}</label>
                        <textarea name="fourth_zone_description_en" id="fourth_zone_description_en" class="form-control">{{ old('fourth_zone_description_en', $home->getTranslation('fourth_zone_description', 'en') ?? '') }}</textarea>
                        @error('fourth_zone_description_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-----------------------------------------end of fourth part------------------------------------->
                </div>
                <div class="pt-4" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                    <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('general.save') }}</button>
                    <button type="reset" class="btn btn-label-danger ">{{ __('general.reset') }}</button>
                </div>
            </form>
        </div>

    @endsection


    @section('script')
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('fourth_zone_description_ar', {
            height: 300,
            toolbar: [{
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
                },
                {
                    name: 'insert',
                    items: ['Link', 'Unlink', 'Image', 'Table']
                },
                {
                    name: 'styles',
                    items: ['Styles', 'Format', 'Font', 'FontSize']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor']
                },
                {
                    name: 'tools',
                    items: ['Maximize']
                }
            ]
        });
        CKEDITOR.replace('fourth_zone_description_en', {
            height: 300,
            toolbar: [{
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
                },
                {
                    name: 'insert',
                    items: ['Link', 'Unlink', 'Image', 'Table']
                },
                {
                    name: 'styles',
                    items: ['Styles', 'Format', 'Font', 'FontSize']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor']
                },
                {
                    name: 'tools',
                    items: ['Maximize']
                }
            ]
        });
    </script>

    @endsection
