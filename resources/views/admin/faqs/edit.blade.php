@extends('admin.layouts.master')
@section('css')
@endsection

@section('title', __('faqs.edit_faq'))

@section('content')
    <div class="card mb-4">
        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">
                <a href="{{ route('admin.faqs.index', $faq->section?->id) }}" class="card-header1">
                    {{ __('faqs.faq_in_section', ['section' => $faq->section?->name]) }}
                </a>
            </h5>
            &nbsp;
            <h5 class="card-header1">{{ __('faqs.edit_faq') }}</h5>
        </div>

        <form class="card-body" action="{{ route('admin.faqs.update', $faq->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <!-- Question Field -->
                <div class="col-md-6">
                    <label class="form-label" for="faq-question_ar">{{ __('faqs.question_ar') }}</label>
                    <input type="text" id="faq-question_ar" name="question_ar" class="form-control"
                        value="{{ old('question_ar', $faq->getTranslation('question','ar')) }}" />
                    @error('question_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="faq-question_en">{{ __('faqs.question_en') }}</label>
                    <input type="text" id="faq-question_en" name="question_en" class="form-control"
                        value="{{ old('question_en', $faq->getTranslation('question','en')) }}" />
                    @error('question_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Answer Field -->
                <div class="col-md-6">
                    <label class="form-label" for="faq-answer_ar">{{ __('faqs.answer_ar') }}</label>
                    <input type="text" name="answer_ar" id="faq-answer_ar" class="form-control"
                        value="{{ old('answer_ar', $faq->getTranslation('answer','ar')) }}" />
                    @error('answer_ar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="faq-answer_en">{{ __('faqs.answer_en') }}</label>
                    <input type="text" name="answer_en" id="faq-answer_en" class="form-control"
                        value="{{ old('answer_en',  $faq->getTranslation('answer','en')) }}" />
                    @error('answer_en')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <!-- Submit and Reset Buttons -->
            <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">{{ __('faqs.update') }}</button>
                <button type="reset" class="btn btn-label-danger">{{ __('faqs.reset') }}</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
@endsection
