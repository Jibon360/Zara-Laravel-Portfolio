@extends('backend.layouts.master')
@section('title', 'admin create new portfolio')
@section('portfolio', 'active open')
@section('portfolioindex', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit portfolio</h5>
                    <small class="text-muted float-end"><a href="{{ route('portfolio.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All portfolio</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('portfolio.update', ['portfolio' => $portfolio->id]) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="input-file-now">portfolio Image Preview</label>
                            <div class="col-sm-10">
                                <img src="{{ asset($portfolio->image) }}" class=" img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="input-file-now">Choose New portfolio Image</label>
                            <div class="col-sm-10">
                                <input type="file" value="{{ $portfolio->image }}" name="image" id="input-file-now"
                                    class="dropify">
                                @error('image')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                                <a href="{{ route('portfolio.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
