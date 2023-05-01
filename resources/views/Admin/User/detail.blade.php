@extends('backend.master')

@section('tittle')
    <title>My Profile</title>
@endsection

@section('content')
<div class="card card-body card-outline">
<div class="form-group mb-1 mt-3">
<div class="card card-primary card-outline">
    <div class="card-body box-profile">
      <div class="text-center">
        <img class="img-circle" src="{{ asset('img/' . auth()->user()->photo) }}" width="300">
      </div>

      <h1 class="profile-username text-center mt-2"><b>{{auth()->user()->name}}</b></h1>

      <h3 class="text-muted text-center">{{auth()->user()->role}}</h3>
      <h2 class="text-muted text-center">{{auth()->user()->email}}</h2>


      <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
    </div>
    <!-- /.card-body -->
  </div>
</div>
</div>
@endsection