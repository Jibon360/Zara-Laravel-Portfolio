@extends('backend.layouts.master')
@section('title', 'admin edit new resume')
@section('resume', 'active open')
@section('resumeindex', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit resume</h5>
                    <small class="text-muted float-end"><a href="{{ route('resume.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All resume</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('resume.update', ['resume' => $resume->id]) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="title">resume Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" value="{{ $resume->title }}"
                                    name="title" placeholder="enter resume text">
                                @error('title')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="short_title">resume Short short_title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="short_title"
                                    value="{{ $resume->short_title }}" name="short_title" placeholder="enter resume text">
                                @error('short_title')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="descriptions">resume descriptions</label>
                            <div class="col-sm-10">

                                <textarea name="descriptions" id="descriptions" class="form-control" rows="5"
                                    placeholder="enter resume descriptions">{{ $resume->descriptions }}</textarea>
                                @error('descriptions')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                                <a href="{{ route('resume.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
