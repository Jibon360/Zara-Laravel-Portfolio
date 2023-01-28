@extends('backend.layouts.master')
@section('title', 'admin edit new aboutshort')
@section('aboutshort', 'active open')
@section('aboutshortedit', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit New Aboutshort</h5>
                    <small class="text-muted float-end"><a href="{{ route('aboutshort.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All aboutshort</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('aboutshort.update', ['aboutshort' => $aboutshort->id]) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="info">aboutshort info</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="info" value="{{ $aboutshort->info }}"
                                    name="info" placeholder="enter aboutshort text">
                                @error('info')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="data">aboutshort data</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="data" value="{{ $aboutshort->data }}"
                                    name="data" placeholder="enter aboutshort text">
                                @error('data')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                                <a href="{{ route('aboutshort.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
