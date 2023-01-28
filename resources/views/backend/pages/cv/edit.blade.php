@extends('backend.layouts.master')
@section('title', 'admin create new cv')
@section('cv', 'active open')
@section('cvindex', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit cv</h5>
                    <small class="text-muted float-end"><a href="{{ route('cv.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All cv</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cv.update', ['cv' => $cv->id]) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="input-file-now">cv Image Preview</label>
                            <div class="col-sm-10">
                                <img src="{{ asset($cv->cvfile) }}" class=" img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="input-file-now">Choose New cv Image</label>
                            <div class="col-sm-10">
                                <input type="file" value="{{ $cv->cvfile }}" name="cvfile" id="input-file-now"
                                    class="dropify">
                                @error('cvfile')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                                <a href="{{ route('cv.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
