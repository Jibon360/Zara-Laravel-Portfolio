@extends('backend.layouts.master')
@section('title', 'admin edit new projectinofo')
@section('projectinofo', 'active open')
@section('projectinofoindex', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit projectinofo</h5>
                    <small class="text-muted float-end"><a href="{{ route('projectinofo.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All projectinofo</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('projectinofo.update', ['projectinofo' => $projectinofo->id]) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="title">projectinofo title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" value="{{ $projectinofo->title }}"
                                    name="title" placeholder="enter projectinofo text">
                                @error('title')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="number">projectinofo Number</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="number"
                                    value="{{ $projectinofo->number }}" name="number" min="0">
                                @error('number')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                                <a href="{{ route('projectinofo.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
