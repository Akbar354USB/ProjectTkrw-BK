@extends('backend.master')

@section('content')
    <div class="card card-body">
    <form action="{{ route('user-store') }}" method="post">
      @csrf
      <h3 align="center"> + Tambah User</h3>
      <div class="mb-3">
        <label>Nama</label>
        <input class="form-control" name="name">
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label for="">Role</label>
        <br>
        <input type="checkbox" name="role" value="ADMIN">
        <label for="ADMIN">ADMIN</label>
        <input type="checkbox" name="role" value="SISWA">
        <label for="STAFF">SISWA</label>
        <input type="checkbox" name="role" value="GURU">
        <label for="CUSTOMER">GURU</label>
        <input type="checkbox" name="role" value="PIHAK BK">
        <label for="CUSTOMER">PIHAK BK</label>
        <input type="checkbox" name="role" value="KEPSEK">
        <label for="CUSTOMER">KEPSEK</label>
        <br>

      </div>
      <div class="mb-3">
        <label>Password</label>
        <input class="form-control" name="password">
      </div>

      <button class="btn btn-primary" type="submit">Submit</button>
    </form>
  </div>
  
@endsection