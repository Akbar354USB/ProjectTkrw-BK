@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Create User</title>
@endsection

@section('content')
    <div class="card card-body">
    <form action="{{ route('user-store') }}" method="post">
      @csrf
      <h3 align="center"> + Tambah User</h3>
      <div class="mb-3">
        <label>Nama</label>
        <input class="form-control" name="name">
        @error('name')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input class="form-control" name="email">
        @error('email')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
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
        @error('role')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

      </div>
      <div class="mb-3">
        <label>Password</label>
        <input class="form-control" name="password">
        @error('password')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <button class="btn btn-primary" type="submit">Submit</button>
    </form>
  </div>
  
@endsection