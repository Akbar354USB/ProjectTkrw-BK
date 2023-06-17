@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Index Laporan</title>
@endsection

@section('content')
<div class="text-center">
  <h1>LAPORAN MASUK</h1>
</div>
<P></P>
<P></P>
<div class="card card-body">
    <div class="form-group row mb-1 mt-3">
      @if (Auth::user()->role == "PIHAK BK")
  <div class="col-sm-6 mb-3 mb-sm-0">
    <a href="{{ route('laporan-create') }}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
  </div>
  @endif
  </div>
    <table class="table table-striped mt-1">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">ID LAPORAN</th>
        <th scope="col">NAMA SISWA</th>
        <th scope="col">RIWAYAT PELANGGARAN</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($laporan as $key=>$item)
        <tr>
            <th scope="row">{{ $key +1 }}</th>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->siswa->nama }}</td>
            <td>{{ $item->riwayat->nama_pelanggaran }}</td>
            <td>
              @if (Auth::user()->role == "PIHAK BK")
                <a class="btn btn-success" href="{{ route('laporan-detail', $item->id) }}" >Detail</a>
                <a class="btn btn-primary" href="{{ route('laporan-edit', $item->id) }}" >Edit</a>
                <form action="{{ route('laporan-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
                @endif
            </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  </div>

  {{-- tag menambahkan pagination --}}
    <div class="mt-2 float-right">
        {{ $laporan->links() }}
    </div>

    {{-- tag tambah alert --}}
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