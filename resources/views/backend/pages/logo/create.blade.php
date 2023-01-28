@extends('backend.layouts.master')
@section('title', 'admin create new logo')
@section('logo', 'active open')
@section('logocreate','active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Create New Logo</h5>
                    <small class="text-muted float-end"><a href="{{ route('logo.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All Logo</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('logo.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Logo Text</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name"
                                    value="{{ old('logo_name') }}" name="logo_name" placeholder="enter logo text">
                                @error('logo_name')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Send</button>
                                <a href="{{ route('logo.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
