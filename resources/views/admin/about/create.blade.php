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
    </style>
@endsection

@section('title', __('about.add_update'))

@section('content')
    <div class="card mb-4">
        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">{{ __('about.add_update') }}</h5>
        </div>

        <form class="card-body" action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <!-- Title First Part -->
                <div class="col-md-6">
                    <label class="form-label" for="title_ar">{{ __('about.title_ar') }}</label>
                    <input type="text" id="title_ar" name="title_ar" class="form-control"
                        value="{{ old('title_ar', optional($about)->getTranslation('title','ar') ?? '') }}" />
                    @error('title_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="title_en">{{ __('about.title_en') }}</label>
                    <input type="text" id="title_en" name="title_en" class="form-control"
                        value="{{ old('title_en', optional($about)->getTranslation('title','en') ?? '') }}" />
                    @error('title_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Description First Part -->
                <div class="col-md-6">
                    <label for="description_ar" class="form-label">{{ __('about.description_ar') }}</label>
                    <textarea name="description_ar" id="description_ar" class="form-control">{{ old('description_ar', optional($about)->getTranslation('description','ar') ?? '') }}</textarea>
                    @error('description_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="description_en" class="form-label">{{ __('about.description_en') }}</label>
                    <textarea name="description_en" id="description_en" class="form-control">{{ old('description_en', optional($about)->getTranslation('description','en') ?? '') }}</textarea>
                    @error('description_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Image First Part -->
                <div class="col-md-6">
                    <label class="form-label" for="image">{{ __('about.image') }}</label>
                    <small class="text-muted">{{__('general.recommended_size')}} : 1920px × 1280px</small>

                    <input class="form-control" type="file" name="image" id="image" multiple />
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @if (!empty($about) && $about->image)
                        <img src="{{ $about->image_url ?? '' }}" class="icon-preview mt-2" alt="Service Image">
                    @endif
                </div>
            </div>

            <!-- Submit and Reset Buttons -->
            <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('about.confirm') }}</button>
                <button type="reset" class="btn btn-label-danger">{{ __('about.reset') }}</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description_ar', {
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

        CKEDITOR.replace('description_en', {
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
