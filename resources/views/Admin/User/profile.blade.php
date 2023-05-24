@extends('backend.master')

@section('tittle')
    <title>B-Konseling | My Profile </title>
@endsection

@section('content')
<div class="row">
<div class="col-md-6">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle" src="{{ asset('img/' . auth()->user()->photo) }}" width="350px">
        </div>

        <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>

        <p class="text-muted text-center">{{auth()->user()->role}}</p>

        <form action="">
        @csrf
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{auth()->user()->email}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Foto Profil</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block">Update Profile</button>
        </form>
      </div>
    </div>
  </div> 
</div>
</div>
  

@endsection