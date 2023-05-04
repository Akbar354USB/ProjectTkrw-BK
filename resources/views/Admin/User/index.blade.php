@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Data User </title>
@endsection

@section('content')
<div class="card card-body">
<div class="form-group row mb-1 mt-3">
<div class="col-sm-6 mb-3 mb-sm-0">
  <a href="{{ route('user-create') }}"><button class="btn btn-primary mb-4">+ Tambah Data User</button></a>
</div>
</div>
  <table class="table table-striped mt-1">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ROLE</th>
      <th scope="col">PROFIL</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($user as $key => $item)
      <tr>
      <th scope="row">{{ $key + 1 }}</th>
      <td>{{ $item ->name }}</td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->role }}</td>
      <td><img src="{{ asset('img/' . auth()->user()->photo) }}" alt="" width="50" height="50"></td>
      <td>
          <a class="btn btn-primary" href="" >Edit</a>
          <a class="btn btn-success" href="{{ route('user-detail', $item->id) }}" >Detail</a>
          <form action="" method="post" style="display: inline" class="form-check-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Hapus</button>
          </form>
          
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection