@extends('backend.layouts.master')
@section('title', 'admin create new cv')
@section('cv', 'active open')
@section('cvcreate', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Upload Cv File</h5>
                    <small class="text-muted float-end"><a href="{{ route('cv.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All cv</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data">
                        @csrf


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="input-file-now">CV FILE</label>
                            <div class="col-sm-10">
                                <input type="file" value="{{ old('cvfile') }}" name="cvfile" id="input-file-now"   class="dropify" 
                                  >
                                @error('cvfile')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Send</button>
                                <a href="{{ route('cv.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
