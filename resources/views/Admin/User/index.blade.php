@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Data User </title>
@endsection

@section('content')
<div class="text-center">
  <h1>DAFTAR PENGGUNA TERDAFTAR</h1>
</div>
<P></P>
<P></P>
<div class="card card-body">

<div class="form-group row mb-1 mt-0">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <a href="{{ route('user-create') }}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
  </div>

  <div class="ml-auto mr-5">
    <form class="d-none d-sm-inline-block form-inline navbar-search">
      <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
              aria-label="Search"  value="{{ Request::get('name') }}" name="name">
          <div class="input-group-append">
              <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
              </button>
          </div>
      </div>
      </form>
  </div>
  </div>


  <table class="table table-striped">
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
      <td><img src="{{ asset('photo/' . $item->photo) }}" alt="" width="50" height="50"></td>
      <td>
          <form action="{{ route('user-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
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


<div class="mt-2 float-right">
  {{ $user->links() }}
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