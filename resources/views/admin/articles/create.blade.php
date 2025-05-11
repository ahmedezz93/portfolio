@extends('admin.layouts.master')

@section('css')
@endsection

@section('title', __('articles.add_article'))

@section('content')
    <div class="card mb-4">
        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">{{ __('articles.add_article') }}</h5>
        </div>

        <form class="card-body" action="{{ route('admin.articles.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <!-- Title Field -->
                <div class="col-md-6">
                    <label class="form-label" for="article-title_ar">{{ __('articles.title_ar') }}</label>
                    <input type="text" name="title_ar" id="article-title_ar" class="form-control"
                        value="{{ old('title_ar') }}" />
                    @error('title_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="article-title_en">{{ __('articles.title_en') }}</label>
                    <input type="text" name="title_en" id="article-title_en" class="form-control"
                        value="{{ old('title_en') }}" />
                    @error('title_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Description Field -->
                <div class="col-md-6">
                    <label for="description_ar" class="form-label">{{ __('articles.description_ar') }}</label>
                    <textarea name="description_ar" id="description_ar" class="form-control">{{ old('description_ar') }}</textarea>
                    @error('description_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="description_en" class="form-label">{{ __('articles.description_en') }}</label>
                    <textarea name="description_en" id="description_en" class="form-control">{{ old('description_en') }}</textarea>
                    @error('description_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Image Upload Field -->
                <div class="col-md-6">
                    <label class="form-label" for="article-image">{{ __('articles.image') }}</label>
                    <small class="text-muted">{{__('general.recommended_size')}} : 1366px × 768px</small>

                    <input class="form-control" type="file" name="image" id="article-image" />
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <!-- Submit and Reset Buttons -->
            <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('articles.confirm') }}</button>
                <button type="reset" class="btn btn-label-danger">{{ __('articles.reset') }}</button>
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
