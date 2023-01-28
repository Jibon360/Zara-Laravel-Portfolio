@extends('backend.layouts.master')
@section('title', 'admin create new about')
@section('about', 'active open')
@section('aboutcreate', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Create New About</h5>
                    <small class="text-muted float-end"><a href="{{ route('about.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All about</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('about.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="bigtitle">About Bit Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bigtitle" value="{{ old('bigtitle') }}"
                                    name="bigtitle" placeholder="about big title">
                                @error('bigtitle')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="descriptions">About Descriptions</label>
                            <div class="col-sm-10">
                                
                                    <textarea class="form-control" name="descriptions" id="descriptions"  rows="5" placeholder="enter about descriptions">
                                        {{ old('descriptions') }}
                                    </textarea>
                                @error('descriptions')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="input-file-now">About Image</label>
                            <div class="col-sm-10">
                                <input type="file" value="{{ old('image') }}" name="image" id="input-file-now"
                                    class="dropify">
                                @error('image')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Send</button>
                                <a href="{{ route('about.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
