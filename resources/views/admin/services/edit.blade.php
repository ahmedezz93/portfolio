@extends('admin.layouts.master')

@section('css')
@endsection

@section('title', __('services.edit_service'))

@section('content')
    <div class="card mb-4">
        <div class="alert alert-info" role="alert">
            <h5 class="card-header">{{ __('services.edit_service') }}</h5>
        </div>

        <form class="card-body" action="{{route('admin.services.update', $service->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method for updating -->
            <div class="row g-3">
                <!-- Name Field -->
                <div class="col-md-6">
                    <label class="form-label" for="service-name_ar">{{ __('services.service_name_ar') }}</label>
                    <input type="text" id="service-name_ar" name="name_ar" class="form-control" value="{{ old('name_ar', $service->getTranslation('name','ar')) }}" />
                    @error('name_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="service-name_en">{{ __('services.service_name_en') }}</label>
                    <input type="text" id="service-name_en" name="name_en" class="form-control" value="{{ old('name_en', $service->getTranslation('name','en')) }}" />
                    @error('name_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image Field -->
                <div class="col-md-6">
                    <label class="form-label" for="service-image">{{ __('services.icon') }}</label>
                    <input class="form-control" type="file" name="image" id="service-image" />
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @if ($service->image_url)
                        <img src="{{ $service->image_url }}" class="icon-preview mt-2" alt="Service Image" width="150px" height="100px">
                    @endif
                </div>

                <!-- Additional Image Field -->
                <div class="col-md-6">
                    <label class="form-label" for="service-images">{{ __('services.images') }}</label>
                    <small class="text-muted">{{__('general.recommended_size')}} : 1200px × 800px</small>
                    <input class="form-control" type="file" name="images[]" id="service-images" multiple accept="image/*" />
                    @error('images')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @if (!empty($service->image_urls) && is_array($service->image_urls))
                        <div class="image-preview mt-2 d-flex flex-wrap">
                            @foreach ($service->image_urls as $image_url)
                                <img src="{{ $image_url }}" class="icon-preview me-2 mb-2" alt="Service Image" style="max-width: 100px; height: auto;">
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Mini Description Field -->
                <div class="col-md-6">
                    <label for="service-mini_description_ar" class="form-label">{{ __('services.mini_description_ar') }}</label>
                    <textarea class="form-control" id="service-mini_description_ar" name="mini_description_ar" rows="4">{{ old('mini_description_ar', $service->getTranslation('mini_description','ar')) }}</textarea>
                    @error('mini_description_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="service-mini_description_en" class="form-label">{{ __('services.mini_description_en') }}</label>
                    <textarea class="form-control" id="service-mini_description_en" name="mini_description_en" rows="4">{{ old('mini_description_en', $service->getTranslation('mini_description','en')) }}</textarea>
                    @error('mini_description_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Description Field -->
                <div class="col-md-6">
                    <label for="description_ar" class="form-label">{{ __('services.description_ar') }}</label>
                    <textarea name="description_ar" id="description_ar" class="form-control" placeholder="">{{ old('description_ar', $service->getTranslation('description','ar')) }}</textarea>
                    @error('description_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="description_en" class="form-label">{{ __('services.description_en') }}</label>
                    <textarea name="description_en" id="description_en" class="form-control" placeholder="">{{ old('description_en', $service->getTranslation('description','en')) }}</textarea>
                    @error('description_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <!-- Submit and Cancel Buttons -->
            <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('services.update') }}</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-label-danger">{{ __('services.cancel') }}</a>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description_ar', {
            height: 300,
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                { name: 'insert', items: ['Link', 'Unlink', 'Image', 'Table'] },
                { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
                { name: 'colors', items: ['TextColor', 'BGColor'] },
                { name: 'tools', items: ['Maximize'] }
            ]
        });

        CKEDITOR.replace('description_en', {
            height: 300,
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                { name: 'insert', items: ['Link', 'Unlink', 'Image', 'Table'] },
                { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
                { name: 'colors', items: ['TextColor', 'BGColor'] },
                { name: 'tools', items: ['Maximize'] }
            ]
        });

    </script>
@endsection
