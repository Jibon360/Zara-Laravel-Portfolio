@extends('backend.layouts.master')
@section('title', 'admin create new animatedheadline')
@section('animatedheadline', 'active open')
@section('animatedheadlineindex', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit animatedheadline</h5>
                    <small class="text-muted float-end"><a href="{{ route('animatedheadline.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All animatedheadline</a></small>
                </div>
                <div class="card-body">
                    <form method="POST"
                        action="{{ route('animatedheadline.update', ['animatedheadline' => $animatedheadline->id]) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="animatedheadlineid" value="{{ $animatedheadline->id }}">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">animatedheadline Text</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name"
                                    value="{{ $animatedheadline->title }}" name="title"
                                    placeholder="enter animatedheadline text">
                                @error('title')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                                <a href="{{ route('animatedheadline.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
