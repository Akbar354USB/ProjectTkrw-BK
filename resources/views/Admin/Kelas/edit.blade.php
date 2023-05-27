@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Edit kelas</title>
@endsection

@section('content')
  <div class="card card-body">
    <form action="{{ route('kelas-update', $kelas->id) }}" method="post">
      @csrf
      @method("put")
      <div class="mb-3">
          <label >Kode Kelas</label>
          <input class="form-control" name="kode_kelas" value="{{ $kelas->kode_kelas }}">
        </div>
      <div class="mb-3">
        <label >Nama Kelas</label>
        <input class="form-control" name="nama" value="{{ $kelas->nama }}">
      </div>
      <div class="mb-3">
          <label >Keterangan</label>
          <input class="form-control" name="keterangan" value="{{ $kelas->keterangan }}">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>

@endsection