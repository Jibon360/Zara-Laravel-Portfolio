@extends('backend.layouts.master')
@section('title', 'zarin admin dashboard')
@section('', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Profile Informations Update.</h5>
                    {{-- <small class="text-muted float-end"><a href="" class=" btn btn-info btn-sm rounded-0">Update
                            Now</a></small> --}}
                </div>
                <div class="card-body">

                    <form action="{{ route('profileupdate',$user->id) }}" method="post" enctype="multipart/form-data">
                        
                      
                        @csrf
                        <input type="hidden" value="{{ $user->id }}" name="profileeditid">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="bigtitle">Image</label>
                            <div class="col-sm-10">
                                {{-- <img src="" alt="" class=" img-fluid img-thumbnail"> --}}
    
                                @if ($user->image)
                                    <img src="{{ asset($user->image) }}" alt="user-avatar" class="d-block rounded" height="100" width="100"
                                        id="uploadedAvatar">
                                @else
                                    <img src="{{ asset('backend') }}/assets/img/avatars/1.png" alt="user-avatar"
                                        class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                                @endif
    
    
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="input-file-now">Change Profile Image</label>
                            <div class="col-sm-10">
                                <input type="file" value="{{ old('image') }}" name="image" id="input-file-now"
                                    class="dropify">
    
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" value="{{ $user->name }}"
                                    name="name">
                                @error('name')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">E-mail</label>
                            <div class="col-sm-10">
                                <input type=" email" class="form-control" id="email" value="{{ $user->email }}"
                                    name="email">
                                @error('email')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
    
                     
                        <div class="mb-3">
                            <button  class=" btn btn-info" type="submit">Update Profile</button>
                            <a href="{{ route('profile.index') }}" class=" btn btn-danger">Cancel</a>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
