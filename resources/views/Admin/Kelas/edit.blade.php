@extends('backend.master')

@section('content')
  <div class="card card-body">
    <form action="{{ route('kelas-update', $kelas->id) }}" method="post">
      @csrf
      @method("put")
      <div class="form-group">
          <label >KODE KELAS</label>
          <input class="form-control" name="kode_kelas" value="{{ $kelas->kode_kelas }}">
        </div>
      <div class="form-group">
        <label >NAMA KELAS</label>
        <input class="form-control" name="nama" value="{{ $kelas->nama }}">
      </div>
      <div class="form-group">
          <label >KETERANGAN</label>
          <input class="form-control" name="keterangan" value="{{ $kelas->keterangan }}">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>

@endsection