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

        .alert-info{
        display: flex;
        justify-content: end;
    }
    </style>
@endsection

@section('title', __('teams.edit_teams'))

@section('content')
    <div class="card mb-4">

        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">{{ __('teams.edit_teams_header') }}</h5>
        </div>

        <form class="card-body" action="{{ route('admin.teams.update',$team->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-3">

                <!-- Name Field -->
                <div class="col-md-6">
                    <label class="form-label" for="team-name_ar">{{ __('teams.name_ar') }}</label>
                    <input type="text" id="team-name_ar" name="name_ar" class="form-control"
                        value="{{ old('name_ar', $team->getTranslation('name', 'ar') ?? '') }}" />
                    @error('name_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="team-name_en">{{ __('teams.name_en') }}</label>
                    <input type="text" id="team-name_en" name="name_en" class="form-control"
                        value=" {{ old('name_en', $team->getTranslation('name', 'en') ?? '') }}" />
                    @error('name_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="team-email">{{ __('teams.email') }}</label>
                    <input type="text" id="team-email" name="email" class="form-control"
                        value="{{ old('email' , $team->email) }}" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="team-phone">{{ __('teams.phone') }}</label>
                    <input type="text" id="team-phone" name="phone" class="form-control"
                        value="{{ old('phone' , $team->phone) }}" />
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="team-experience">{{ __('teams.experience') }}</label>
                    <input type="number" id="team-experience" name="experience" class="form-control"
                        value="{{ old('experience' , $team->experience) }}" />
                    @error('experience')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image Upload Field -->
                <div class="col-md-6">
                    <label class="form-label" for="team-image">{{ __('teams.image') }}</label>
                    <small class="text-muted">{{__('general.recommended_size')}} : 414px × 500px</small>
                    <input class="form-control" type="file" name="image" id="team-image" />
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Display existing image if editing -->
                    @if (isset($team) && $team->image_url)
                        <img src="{{ $team->image_url }}" class="icon-preview mt-2" alt="{{ __('teams.team_image') }}">
                    @endif
                </div>

                <!-- Job Title Field -->
                <div class="col-md-6">
                    <label for="team-job_title_ar" class="form-label">{{ __('teams.job_title_ar') }}</label>
                    <input type="text" class="form-control" id="team-job_title_ar" name="job_title_ar" value="{{ old('job_title_ar', $team->getTranslation('job_title', 'ar') ?? '') }}">
                    @error('job_title_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="team-job_title_en" class="form-label">{{ __('teams.job_title_en') }}</label>
                    <input type="text" class="form-control" id="team-job_title_en" name="job_title_en" value="{{ old('job_title_en', $team->getTranslation('job_title', 'en') ?? '') }}">
                    @error('job_title_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Social Media Links -->
                <div class="col-md-6">
                    <label for="team-facebook_link" class="form-label">{{ __('teams.facebook_link') }}</label>
                    <input type="text" class="form-control" id="team-facebook_link" name="facebook_link" value="{{ old('facebook_link', $team->facebook_link) }}">
                    @error('facebook_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="team-twitter_link" class="form-label">{{ __('teams.twitter_link') }}</label>
                    <input type="text" class="form-control" id="team-twitter_link" name="twitter_link" value="{{ old('twitter_link', $team->twitter_link) }}">
                    @error('twitter_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="team-instagram_link" class="form-label">{{ __('teams.instagram_link') }}</label>
                    <input type="text" class="form-control" id="team-instagram_link" name="instagram_link" value="{{ old('instagram_link', $team->instagram_link) }}">
                    @error('instagram_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="team-linkdin_link" class="form-label">{{ __('teams.linkdin_link') }}</label>
                    <input type="text" class="form-control" id="team-linkdin_link" name="linkdin_link" value="{{ old('linkdin_link', $team->linkdin_link) }}">
                    @error('linkdin_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Details Field -->
                <div class="col-md-6">
                    <label for="details_ar" class="form-label">{{ __('teams.details_ar') }}</label>
                    <textarea name="details_ar" id="details_ar" class="form-control" placeholder="">{{ old('details_ar', $team->getTranslation('details', 'ar') ?? '') }}</textarea>
                    @error('details_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="details_en" class="form-label">{{ __('teams.details_en') }}</label>
                    <textarea name="details_en" id="details_en" class="form-control" placeholder="">{{ old('details_en', $team->getTranslation('details', 'en') ?? '') }}</textarea>
                    @error('details_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Submit and Reset Buttons -->
            <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('teams.confirm') }}</button>
                <button type="reset" class="btn btn-label-danger">{{ __('teams.reset') }}</button>
            </div>
        </form>
    </div>

@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('details_ar', {
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
    CKEDITOR.replace('details_en', {
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
