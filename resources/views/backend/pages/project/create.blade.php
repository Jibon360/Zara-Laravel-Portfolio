@extends('backend.layouts.master')
@section('title', 'admin create new projectinofo')
@section('projectinofo', 'active open')
@section('projectinofocreate', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Create New projectinofo</h5>
                    <small class="text-muted float-end"><a href="{{ route('projectinofo.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All projectinofo</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('projectinofo.store') }}" enctype="multipart/form-data">
                        @csrf
                 
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="title">projectinofo title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" value="{{ old('title') }}"
                                    name="title" placeholder="enter projectinofo text">
                                @error('title')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="number">projectinofo Number</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="number" value="{{ old('number') }}"
                                    name="number" min="0">
                                @error('number')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Send</button>
                                <a href="{{ route('projectinofo.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
