@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Index kelas</title>
@endsection

@section('content')
<div class="text-center">
  <h1>DAFTAR KELAS</h1>
</div>
<P></P>
<P></P>
<div class="card card-body">

  <div class="form-group row mb-1 mt-0">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <a href="{{ route('kelas-create') }}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
    </div>
  
    <div class="ml-auto mr-5">
      <form class="d-none d-sm-inline-block form-inline navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search"  value="{{ Request::get('nama') }}" name="nama">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
        </form>
    </div>
    </div>
    
  <table class="table table-striped mt-1">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">KODE KELAS</th>
      <th scope="col">NAMA KELAS</th>
      <th scope="col">KETERANGAN</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($kelas as $key => $item)
      <tr>
      <th scope="row">{{ $key + 1 }}</th>
      <td>{{ $item->kode_kelas }}</td>
      <td>{{ $item->nama }}</td>
      <td>{{ $item->keterangan }}</td>
      <td>
          <a class="btn btn-primary" href="{{ route('kelas-edit', $item->id) }}" >Edit</a>
          <form action="{{ route('kelas-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
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
  {{ $kelas->links() }}
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