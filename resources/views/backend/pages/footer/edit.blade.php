@extends('backend.layouts.master')
@section('title', 'admin create new footer')
@section('footer', 'active open')
@section('footerindex', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit footer</h5>
                    <small class="text-muted float-end"><a href="{{ route('footer.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All footer</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('footer.update', ['footer' => $footer->id]) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="footerid" value="{{ $footer->id }}">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="footer_text">footer Text</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="footer_text"
                                    value="{{ $footer->footer_text }}" name="footer_text" placeholder="enter footer text">
                                @error('footer_text')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                                <a href="{{ route('footer.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
