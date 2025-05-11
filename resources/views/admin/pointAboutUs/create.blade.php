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
    </style>
@endsection

@section('title')

@section('content')
    <div class="card mb-4">

        <div class="alert alert-info" role="alert">
            <h5 class="card-header1">Create Point About Us</h5>
        </div><br><br>

        <form class="card-body" action="{{ route('admin.points.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <!-- Name Field -->
                <div class="col-md-6">
                    <label class="form-label" for="point-title">Point Title</label>
                    <input type="text" id="point-title" name="title" class="form-control"
                        value="{{ old('title') }}" />
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Description Field -->
                <div class="col-md-12">
                    <label for="point-description" class="form-label">Description</label>
                    <textarea class="form-control" id="point-description" name="description" rows="4" cols="5">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


            </div>

            <!-- Submit and Reset Buttons -->
            <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">Confirm</button>
                <button type="reset" class="btn btn-label-danger">Reset</button>
            </div>
        </form>
    </div>

@endsection


@section('script')

@endsection
