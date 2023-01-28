@extends('backend.layouts.master')
@section('title', 'zarin admin dashboard')
@section('', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Profile Informations.</h5>
                    <small class="text-muted float-end"><a href="{{ route('profileedit',['id'=>$user->id]) }}"
                            class=" btn btn-info btn-sm rounded-0">Update Now</a></small>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <strong class="col-sm-2 col-form-label" for="bigtitle">Image</strong>
                        <div class="col-sm-10">
                           @if ($user->image)
                           <img src="{{ asset($user->image) }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                           @else
                           <img src="{{ asset('backend') }}/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                           @endif
                          
                        </div>
                    </div>

                    <div class="row mb-3">
                        <strong class="col-sm-2 col-form-label" for="bigtitle">Name</strong>
                        <div class="col-sm-10">
                            <b>{{ $user->name }}</b>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <strong class="col-sm-2 col-form-label" for="bigtitle">E-mail</strong>
                        <div class="col-sm-10">
                            <b>{{ $user->email }}</b>
                        </div>
                    </div>
                 
                  
                    <div class="row mb-3 ">
                        <strong class="col-sm-2 col-form-label" for="bigtitle">Created Time</strong>
                        <div class="col-sm-10">
                            <b class="badge bg-label-success">{{ $user->created_at->diffFOrHumans() }}</b>
                        </div>
                    </div>

                    <div class="row mb-3 ">
                        <strong class="col-sm-2 col-form-label" for="bigtitle">Lat Updated Time</strong>
                        <div class="col-sm-10">
                            <b class="badge bg-label-warning">{{ $user->updated_at->diffFOrHumans() }}</b>
                        </div>
                    </div>
                    <div class="row mb-3 ">

                        <div class="col-12">
                            <a href="{{ route('admin.dashboard') }}" class=" btn btn-danger btn-sm">Back</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection


