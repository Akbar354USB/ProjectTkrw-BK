@extends('backend.master')

@section('content')
<div class="card card-body">
    <div class="form-group row mb-1 mt-3">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <a href="{{ route('siswa-create') }}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
  </div>
  </div>
    <table class="table table-striped mt-1">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">NIS</th>
        <th scope="col">NAMA</th>
        <th scope="col">KELAS</th>
        <th scope="col">JENIS KELAMIN</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $key=>$item)
        <tr>
            <th scope="row">{{ $key +1 }}</th>
            <td>{{ $item->nis }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kelas->nama }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('siswa-edit', $item->id) }}" >Edit</a>
                <form action="{{ route('siswa-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
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
        {{ $siswa->links() }}
    </div>
@endsection