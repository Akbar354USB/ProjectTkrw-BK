{{-- @extends('backend.master')

@section('tittle')
    <title>B-Konseling | Index Riwayat</title>
@endsection

@section('content')
<div class="text-center">
  <h1>DAFTAR RIWAYAT PELANGGARAN</h1>
</div>
<P></P>
<P></P>
<div class="card card-body">

    <div class="form-group row mb-1 mt-3">
      @if (Auth::user()->role == "PIHAK BK")
  <div class="col-sm-6 mb-3 mb-sm-0">
    <a href="{{ route('riwayat-create') }}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
  </div>
  @endif
  </div>
  
  @if (Auth::user()->role == "PIHAK BK")
  <div class="col-sm-6 mb-3 mb-sm-0">
    <a href="{{ route('pelanggaran-create') }}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
  </div>
  @endif

  <div class="ml-auto mr-5">
    <form class="d-none d-sm-inline-block form-inline navbar-search">
      <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
              aria-label="Search"  value="{{ Request::get('nama_siswa') }}" name="nama_siswa">
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
        <th scope="col">NAMA SISWA</th>
        <th scope="col">PELANGGARAN</th>
        <th scope="col">SKOR</th>
        <th scope="col">TANGGAL</th>
        @if (Auth::user()->role == "PIHAK BK")
        <th scope="col">AKSI</th>
        @endif
      </tr>
    </thead>
    <tbody>
        @foreach ($riwayat as $key=>$item)
        <tr>
            <th scope="row">{{ $key +1 }}</th>
            <td>{{ $item->siswa->nama}}</td>
            <td>{{ $item->nama_pelanggaran }}</td>
            <td>{{ $item->skor }}</td>
            <td>{{ $item->tanggal }}</td>
            @if (Auth::user()->role == "PIHAK BK")
            <td>
                <a class="btn btn-primary" href="{{ route('riwayat-edit', $item->id) }}" >Edit</a>
                <form action="{{ route('riwayat-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </td>
            @endif
            </tr>
        @endforeach
    </tbody>
  </table>
  </div>
</div>

  <div class="mt-2 float-right">
    {{ $riwayat->links() }}
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
@endsection --}}

@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Index Pelanggaran</title>
@endsection

@section('content')
<div class="text-center">
  <h1>DAFTAR RIWAYAT PELANGGARAN</h1>
</div>
<P></P>
<P></P>
<div class="card card-body">
  <div class="form-group row mb-1 mt-0">
    @if (Auth::user()->role == "PIHAK BK")
    <div class="col-sm-6 mb-3 mb-sm-0">
      <a href="{{ route('riwayat-create') }}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
    </div>
    @endif
  
    <div class="ml-auto mr-5">
      <form class="d-none d-sm-inline-block form-inline navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search"  value="{{ Request::get('nama_pelanggaran') }}" name="nama_pelanggaran">
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
          <th scope="col">NAMA SISWA</th>
          <th scope="col">PELANGGARAN</th>
          <th scope="col">SKOR</th>
          <th scope="col">TANGGAL</th>
          @if (Auth::user()->role == "PIHAK BK")
          <th scope="col">AKSI</th>
          @endif
        </tr>
      </thead>
      <tbody>
        @foreach ($riwayat as $key=>$item)
        <tr>
            <th scope="row">{{ $key +1 }}</th>
            <td>{{ $item->siswa->nama}}</td>
            <td>{{ $item->nama_pelanggaran }}</td>
            <td>{{ $item->skor }}</td>
            <td>{{ $item->tanggal }}</td>
            @if (Auth::user()->role == "PIHAK BK")
            <td>
                <a class="btn btn-primary" href="{{ route('riwayat-edit', $item->id) }}" >Edit</a>
                <form action="{{ route('riwayat-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </td>
            @endif
            </tr>
        @endforeach
    </tbody>
  </table>
  </div>

  {{-- tag menambahkan pagination --}}
  <div class="mt-2 float-right">
    {{ $riwayat->links() }}
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