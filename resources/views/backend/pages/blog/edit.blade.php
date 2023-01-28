@extends('backend.layouts.master')
@section('title', 'edit blog')
@section('blog', 'active open')
@section('blogindex', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit blog</h5>
                    <small class="text-muted float-end"><a href="{{ route('blog.index') }}"
                            class=" btn btn-info btn-sm rounded-0">All blog</a></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('blog.update', ['blog' => $blog->id]) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="bigtitle">blog Bit Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bigtitle" value="{{ $blog->bigtitle }}"
                                    name="bigtitle" placeholder="blog big title">
                                @error('bigtitle')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="descriptions">blog Descriptions</label>
                            <div class="col-sm-10">

                                <textarea class="form-control" name="descriptions" id="descriptions" rows="5"
                                    placeholder="enter blog descriptions">
                                        {{ $blog->descriptions }}
                                    </textarea>
                                @error('descriptions')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="input-file-now">blog Image Preview</label>
                            <div class="col-sm-10">
                                <img src="{{ asset($blog->image) }}" class=" img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="input-file-now">Choose New blog Image</label>
                            <div class="col-sm-10">
                                <input type="file" value="{{ $blog->image }}" name="image" id="input-file-now"
                                    class="dropify">
                                @error('image')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="category_id">Select Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="category_id" name="category_id">
                                    <option value="" style="display: none">Select Once Category</option>
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->id }}" @if ($category->id==$blog->category_id)
                                            selected=""
                                        @endif>{{ $category->category_name }}</option>

                                    @empty
                                        <option>No blog Found</option>
                                    @endforelse

                                </select>
                                @error('blog_id')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>




                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                                <a href="{{ route('blog.index') }}" class=" btn btn-md btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
