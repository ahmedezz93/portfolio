@extends('admin.layouts.master')
@section('css')
@endsection

@section('title', 'Edit Category')


@section('content')
    <div class="card mb-4">
        <h5 class="card-header">Edit Categories</h5>
        <form class="card-body" action="{{ route('admins.categories.update',$category->id) }}" method="post">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-Grade Code">Code</label>
                    <input type="text" id="multicol-Grade Code" name="code" class="form-control"
                        value="{{old('code',$category->code)}}" />
                    @error('code')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="multicol-Name">Name</label>
                    <input type="text" id="multicol-Name" name="name" class="form-control"
                        value="{{old('name',$category->name)}}" />
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>
@endsection


@section('script')

@endsection
