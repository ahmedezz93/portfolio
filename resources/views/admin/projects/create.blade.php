@extends('admin.layouts.master')

@section('css')
@endsection

@section('title', __('projects.Add New Project'))

@section('content')
    <div class="card mb-4">
        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">{{ __('projects.Add New Project') }}</h5>
        </div>

        <form class="card-body" action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <!-- Name Field -->
                <div class="col-md-6">
                    <label class="form-label" for="project-name_ar">{{ __('projects.name_ar') }}</label>
                    <input type="text" id="project-name_ar" name="name_ar" class="form-control" value="{{ old('name_ar') }}" />
                    @error('name_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="project-name_en">{{ __('projects.name_en') }}</label>
                    <input type="text" id="project-name_en" name="name_en" class="form-control" value="{{ old('name_en') }}" />
                    @error('name_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Image Upload Field -->
                <div class="col-md-6">
                    <label class="form-label" for="project-image">{{ __('projects.Image') }}</label>
                    <small class="text-muted">{{__('general.recommended_size')}} : 1200px × 800px</small>
                    <input class="form-control" type="file" name="image" id="project-image" />
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Display existing image if editing -->
                    @if (isset($project) && $project->image_url)
                        <img src="{{ $project->image_url }}" class="icon-preview mt-2" alt=" Image">
                    @endif
                </div>

            </div> <br> <br>

            <div class="alert alert-info" role="alert">
                <h5 class="card-header1">{{ __('projects.Add Info') }}</h5>
            </div>
            <div class="row g-3">

                <!-- Client Field -->
                <div class="col-md-6">
                    <label class="form-label" for="client_ar">{{ __('projects.client_ar') }}</label>
                    <input type="text" id="client_ar" name="client_ar" class="form-control" value="{{ old('client_ar') }}" />
                    @error('client_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="client_en">{{ __('projects.client_en') }}</label>
                    <input type="text" id="client_en" name="client_en" class="form-control" value="{{ old('client_en') }}" />
                    @error('client_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Category Field -->
                <div class="col-md-6">
                    <label class="form-label" for="category_ar">{{ __('projects.category_ar') }}</label>
                    <input type="text" id="category_ar" name="category_ar" class="form-control" value="{{ old('category_ar') }}" />
                    @error('category_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="category_en">{{ __('projects.category_en') }}</label>
                    <input type="text" id="category_en" name="category_en" class="form-control" value="{{ old('category_en') }}" />
                    @error('category_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>



                <!-- Location Field -->
                <div class="col-md-6">
                    <label class="form-label" for="location_ar">{{ __('projects.location_ar') }}</label>
                    <input type="text" id="location_ar" name="location_ar" class="form-control" value="{{ old('location_ar') }}" />
                    @error('location_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="location_en">{{ __('projects.location_en') }}</label>
                    <input type="text" id="location_en" name="location_en" class="form-control" value="{{ old('location_en') }}" />
                    @error('location_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Description Field -->
                <div class="col-md-6">
                    <label for="description_ar" class="form-label">{{ __('projects.description_ar') }}</label>
                    <textarea name="description_ar" id="description_ar" class="form-control" placeholder="">{{ old('description_ar') }}</textarea>
                    @error('description_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="description_en" class="form-label">{{ __('projects.description_en') }}</label>
                    <textarea name="description_en" id="description_en" class="form-control" placeholder="">{{ old('description_en') }}</textarea>
                    @error('description_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date Field -->
                <div class="col-md-6">
                    <label class="form-label" for="date">{{ __('projects.Date') }}</label>
                    <input type="date" id="date" name="date" class="form-control" value="{{ old('date') }}" />
                    @error('date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


            </div>

            <!-- Submit and Reset Buttons -->
            <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('projects.Confirm') }}</button>
                <button type="reset" class="btn btn-label-danger">{{ __('projects.Reset') }}</button>
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
