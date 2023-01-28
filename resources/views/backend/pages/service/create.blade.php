@extends('backend.layouts.master')
@section('title', 'admin create new service')
@section('service', 'active open')
@section('servicecreate', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Create New service</h5>
                    <small class="text-muted float-end"><a href="{{ route('service.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All service</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="icon">service Icon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="icon" value="{{ old('icon') }}"
                                    name="icon" placeholder="enter service text">
                                @error('icon')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="title">service title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" value="{{ old('title') }}"
                                    name="title" placeholder="enter service text">
                                @error('title')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="descripiton">service Descripiton</label>
                            <div class="col-sm-10">

                                <textarea name="descripiton" id="descripiton" class="form-control" rows="5"
                                    placeholder="enter service descriptions">{{ old('descripiton') }}</textarea>
                                @error('descripiton')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Send</button>
                                <a href="{{ route('service.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
