@extends('admin.layouts.master')
@section('css')

@endsection

@section('title', __('users.create_user'))

@section('content')
    <div class="card mb-4">

        <div class="alert alert-info" role="alert">
            <h5 class="card-header1"> {{ __('users.create_user') }}</h5>
        </div>

        <form class="card-body" action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <!-- Name Field -->
                <div class="col-md-6">
                    <label class="form-label" for="team-name_ar"> {{ __('users.name_ar') }}</label>
                    <input type="text" id="team-name_ar" name="name_ar" class="form-control" value="{{ old('name_ar') }}" />
                    @error('name_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Name Field -->
                <div class="col-md-6">
                    <label class="form-label" for="team-name_en"> {{ __('users.name_en') }}</label>
                    <input type="text" id="team-name_en" name="name_en" class="form-control" value="{{ old('name_en') }}" />
                    @error('name_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label class="form-label" for="team-email"> {{ __('users.email') }}</label>
                    <input type="text" id="team-email" name="email" class="form-control" value="{{ old('email') }}" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>



                <div class="col-md-6">
                    <label class="form-label" for="team-password"> {{ __('users.password') }}</label>
                    <input type="password" id="team-password" name="password" class="form-control"
                        value="{{ old('password') }}" />
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>



                <!-- Image Upload Field -->
                <div class="col-md-6">
                    <label class="form-label" for="team-image">{{ __('users.image') }}</label>
                    <input class="form-control" type="file" name="image" id="team-image" />
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Display existing image if editing -->
                    @if (isset($team) && $team->image_url)
                        <img src="{{ $team->image_url }}" class="icon-preview mt-2" alt="User Image" width="150px" height="100px">
                    @endif
                </div>


            </div>

            <!-- Submit and Reset Buttons -->
            <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('general.save') }}</button>
                <button type="reset" class="btn btn-label-danger">{{ __('general.reset') }}</button>
            </div>
        </form>
    </div>

@endsection

@section('script')
    <!-- Load CKEditor -->
    <script src="https://cdn.ckeditor.com/4.22.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('details', {
            height: 300,
            toolbar: [{
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'TextDirectionLtr',
                        'TextDirectionRtl'
                    ]
                },
                {
                    name: 'insert',
                    items: ['Link', 'Unlink', 'Image', 'Table']
                }, // Table already included
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
            ],
            extraPlugins: 'table', // Ensure the table plugin is included
        });
    </script>

@endsection
