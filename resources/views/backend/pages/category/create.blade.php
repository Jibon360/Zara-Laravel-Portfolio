@extends('backend.layouts.master')
@section('title', 'admin create new category')
@section('category', 'active open')
@section('categorycreate','active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Create New category</h5>
                    <small class="text-muted float-end"><a href="{{ route('category.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All category</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">category Text</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name"
                                    value="{{ old('category_name') }}" name="category_name" placeholder="enter category name">
                                @error('category_name')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Send</button>
                                <a href="{{ route('category.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
