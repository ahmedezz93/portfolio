@extends('admin.layouts.master')

@section('css')
@endsection

@section('title', 'Add New Education')

@section('content')
    <div class="card mb-4">
        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">Education</h5>
        </div>

        <form class="card-body" action="{{ route('admin.educations.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <!-- Name Field -->
                <div class="col-md-6">
                    <label class="form-label" for="project-degree">Degree</label>
                    <input type="text" id="project-degree" name="degree" class="form-control" value="{{ old('degree') }}" />
                    @error('degree')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="project-institution">Institution</label>
                    <input type="text" id="project-institution" name="institution" class="form-control" value="{{ old('institution') }}" />
                    @error('institution')
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

                <div class="col-md-12">
                    <label class="form-label" for="multicol-Website-Name-Arabic"> Description</label>
                    <textarea id="multicol-Website-Name-Arabic" name="description" class="form-control" rows="3">{{ old('description', isset($personalInfo) ? $personalInfo->description : '') }}</textarea>
                    @error('description')
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
