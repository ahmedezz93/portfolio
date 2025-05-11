@extends('admin.layouts.master')
@section('css')
@endsection

@section('title', __('sectionFaqs.edit_faq_section'))

@section('content')
    <div class="card mb-4">
        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">{{ __('sectionFaqs.edit_faq_section') }}</h5>
        </div>

        <form class="card-body" action="{{ route('admin.sectionFaqs.update', $section->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <!-- Name Field -->
                <div class="col-md-6">
                    <label class="form-label" for="faq-name_ar">{{ __('sectionFaqs.section_name_ar') }}</label>
                    <input type="text" id="faq-name_ar" name="name_ar" class="form-control"
                        value="{{ old('name_ar', $section->getTranslation('name', 'ar') ?? '') }}" />
                    @error('name_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="faq-name_en">{{ __('sectionFaqs.section_name_en') }}</label>
                    <input type="text" id="faq-name_en" name="name_en" class="form-control"
                        value="{{ old('name_ar', $section->getTranslation('name', 'en') ?? '') }}" />
                    @error('name_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <!-- Submit and Reset Buttons -->
            <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('sectionFaqs.confirm') }}</button>
                <button type="reset" class="btn btn-label-danger">{{ __('sectionFaqs.reset') }}</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
@endsection
