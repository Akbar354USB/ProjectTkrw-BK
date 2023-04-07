@extends('backend.master')

@section('content')
<div class="card card-body">
    <div class="form-group row mb-1 mt-3">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <a href="{{ route('pelanggaran-create') }}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
  </div>
  </div>
    <table class="table table-striped mt-1">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">PELANGGARAN</th>
        <th scope="col">NAMA PELANGGAR</th>
        <th scope="col">KELAS</th>
        <th scope="col">TANGGAL</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pelanggaran as $key=>$item)
        <tr>
            <th scope="row">{{ $key +1 }}</th>
            <td>{{ $item->nama_pelanggaran }}</td>
            <td>{{ $item->nama_siswa }}</td>
            <td>{{ $item->kelas->nama }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('pelanggaran-edit', $item->id) }}" >Edit</a>
                <form action="{{ route('pelanggaran-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
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

  {{-- tag menambahkan pagination --}}
  <div class="mt-2 float-right">
    {{ $pelanggaran->links() }}
  </div>
@endsection