@extends('admin.layouts.master')

@section('css')
@endsection

@section('title', 'Add New Project')

@section('content')
    <div class="card mb-4">
        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">Project</h5>
        </div>

        <form class="card-body" action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6 form-group">
                    <div>
                        <label class="form-label" for="formFile">Image</label>
                        <small class="text-muted">Recommended size: </small>
                        <input class="form-control" type="file" name="image" id="formFile" />
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @if (isset($personalInfo) && $personalInfo->image_url)
                        <img src="{{ $personalInfo->image_url ?? '' }}" class="icon-preview" alt="image">
                    @endif
                </div>

                <!-- Name Field -->
                <div class="col-md-6">
                    <label class="form-label" for="project-name">Name</label>
                    <input type="text" id="project-name" name="name" class="form-control"
                        value="{{ old('name') }}" />
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Client Field -->
                <div class="col-md-6">
                    <label class="form-label" for="project-client">Client</label>
                    <input type="text" id="project-client" name="client" class="form-control"
                        value="{{ old('client') }}" />
                    @error('client')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date Field -->
                <div class="col-md-6">
                    <label class="form-label" for="start_date">Start Date</label>
                    <input type="date" id="start_date" name="start_date" class="form-control"
                        value="{{ old('start_date') }}" />
                    @error('start_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="end_date">End Date</label>
                    <input type="date" id="end_date" name="end_date" class="form-control"
                        value="{{ old('end_date') }}" />
                    @error('end_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="project-used_technologies">Used Technologies</label>
                    <input type="text" id="project-used_technologies" name="used_technologies" class="form-control"
                        value="{{ old('used_technologies') }}" />
                    @error('used_technologies')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="project-link">Link</label>
                    <input type="text" id="project-link" name="link" class="form-control"
                        value="{{ old('link') }}" />
                    @error('link')
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
