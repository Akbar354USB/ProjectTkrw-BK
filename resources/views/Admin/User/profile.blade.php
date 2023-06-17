@extends('backend.master')

@section('tittle')
    <title>B-Konseling | My Profile </title>
@endsection

@section('content')
<div class="text-center">
  <h1>my Profile</h1>
</div>
<P></P>
<P></P>
 <div class="card card-body">
  <div class="row">
    <div class="col-md-6">

      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{ asset('photo/' . auth()->user()->photo) }}" alt="User profile picture" >
          </div>

          <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

          <p class="text-muted text-center">{{ auth()->user()->role }}</p>

          <form action="{{ route('update-profile') }}" class="form-horizontal" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email" value="{{ auth()->user()->email }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="photo" class="col-sm-2 col-form-label">Foto</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="photo" name="photo">
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block"><b>Update Profile</b></button>
          </form>
        </div>
      </div>
    </div>


    <div class="col-md-6">

      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <h4 class="profile-username text-center">Ganti Password</h4>
          <p></p>
          <p></p>
          <p></p>
          <p></p>

          <form action="{{ route('update-profile') }}" class="form-horizontal" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Password Baru</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="inputEmail3" name="email">
              </div>
            </div>
            <div class="form-group row">
              <label for="photo" class="col-sm-3 col-form-label">Konfirmasi Password</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="photo" name="email">
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block"><b>Update Password</b></button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>  




@if (session('status'))
<script>
  Swal.fire({
    icon : 'success',
    title : 'Sukses!',
    text : "{{ session('status') }}",
  });
</script>
@endif
@endsection