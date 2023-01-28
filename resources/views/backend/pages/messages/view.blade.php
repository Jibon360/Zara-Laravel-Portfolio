@extends('backend.layouts.master')
@section('title', 'admin view single user message')
@section('message', 'active open')
@section('messageindex', 'active')
@section('content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">view Single user Message..</h5>
                    <small class="text-muted float-end"><a href="{{ route('show.message') }}"
                            class=" btn btn-info btn-sm rounded-0">Back Now</a></small>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <strong class="col-sm-2 col-form-label" for="bigtitle">Name</strong>
                        <div class="col-sm-10">
                            <b>{{ $message->name }}</b>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <strong class="col-sm-2 col-form-label" for="bigtitle">E-mail</strong>
                        <div class="col-sm-10">
                            <b>{{ $message->email }}</b>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <strong class="col-sm-2 col-form-label" for="bigtitle">Subject</strong>
                        <div class="col-sm-10">
                            <b>{{ $message->subject }}</b>
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <strong class="col-sm-2 col-form-label" for="bigtitle">Message</strong>
                        <div class="col-sm-10">
                            <b>{{ $message->message }}</b>
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <strong class="col-sm-2 col-form-label" for="bigtitle">time</strong>
                        <div class="col-sm-10">
                            <b class="badge bg-label-success">{{ $message->created_at->diffForHumans() }}</b>
                        </div>
                    </div>
                    <div class="row mb-3 ">

                        <div class="col-12">
                            <a href="{{ route('show.message') }}" class=" btn btn-danger btn-sm">Back</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
