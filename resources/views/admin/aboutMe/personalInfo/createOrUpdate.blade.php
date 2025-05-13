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

@section('title', 'Personal Info')

@section('content')
    <div class="card mb-4">

        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">Personal Info</h5>
        </div>
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <form class="card-body" action="{{route('site.personalInfo.createOrUpdate')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <h5 class="text-center">Personal Info</h5>
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

                    <div class="col-md-6 form-group">
                        <div>
                            <label class="form-label" for="formFile">Upload Cv</label>
                            <small class="text-muted">Recommended size: </small>
                            <input class="form-control" type="file" name="cv" id="formFile" />
                            @error('cv')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (isset($personalInfo) && $personalInfo->cv_url)
                            <img src="{{ $personalInfo->cv_url ?? '' }}" class="icon-preview" alt="image">
                        @endif
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="multicol-Website-Name-Arabic">Mini Description</label>
                        <textarea id="multicol-Website-Name-Arabic" name="mini_description" class="form-control" rows="3">{{ old('mini_description', isset($personalInfo) ? $personalInfo->mini_description : '') }}</textarea>
                        @error('mini_description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">First Name</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="first_name" class="form-control"
                            value="{{ old('first_name', isset($personalInfo) ? $personalInfo->first_name : '') }}" />
                        @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Name Arabic">Last Name</label>
                        <input type="text" id="multicol-Website-Name-Arabic" name="last_name" class="form-control"
                            value="{{ old('last_name', isset($personalInfo) ? $personalInfo->last_name : '') }}" />
                        @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <!-- Date Field -->
                    <div class="col-md-6">
                        <label class="form-label" for="date_of_birth">Date Of birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control"
                            value="{{ old('date_of_birth') }}" />
                        @error('date_of_birth')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Nationality">Nationality</label>
                        <input type="text" id="multicol-Website-Nationality" name="nationality" class="form-control"
                            value="{{ old('nationality', isset($personalInfo) ? $personalInfo->nationality : '') }}" />
                        @error('nationality')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website-Freelance">Freelance</label>
                        <select id="multicol-Website-Freelance" name="freelance" class="form-control">
                            <option value="">Select Option</option>
                            <option value="yes"
                                {{ old('freelance', isset($personalInfo) ? $personalInfo->freelance : '') == 'yes' ? 'selected' : '' }}>
                                Yes</option>
                            <option value="no"
                                {{ old('freelance', isset($personalInfo) ? $personalInfo->freelance : '') == 'no' ? 'selected' : '' }}>
                                No</option>
                        </select>
                        @error('freelance')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-Website Phone">Phone</label>
                        <input type="text" id="multicol-Website Phone" name="phone" class="form-control"
                            value="{{ old('phone', isset($personalInfo) ? $personalInfo->phone : '') }}" />
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-email">Email</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-email" name="email" class="form-control"
                                value="{{ old('email', isset($personalInfo) ? $personalInfo->email : '') }}" aria-label=""
                                aria-describedby="multicol-email2" />
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-address">address</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-address" name="address" class="form-control"
                                value="{{ old('address', isset($personalInfo) ? $personalInfo->address : '') }}" aria-label=""
                                aria-describedby="multicol-address2" />
                        </div>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-spoken_languages">Spoken Langauages</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-spoken_languages" name="spoken_languages"
                                class="form-control"
                                value="{{ old('spoken_languages', isset($personalInfo) ? $personalInfo->spoken_languages : '') }}"
                                aria-label="" aria-describedby="multicol-spoken_languages2" />
                        </div>
                        @error('spoken_languages')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-linkedin">LinkedIn</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-linkedin" name="linkedin" class="form-control"
                                value="{{ old('linkedin', isset($personalInfo) ? $personalInfo->linkedin : '') }}" aria-label=""
                                aria-describedby="multicol-linkedin2" />
                        </div>
                        @error('linkedin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('general.save') }}</button>
                    <button type="reset" class="btn btn-label-danger ">{{ __('general.reset') }}</button>
                </div>
            </form>
        </div>

    @endsection


    @section('script')

    @endsection
