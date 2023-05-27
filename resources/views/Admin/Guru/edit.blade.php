@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Edit Guru</title>
@endsection

@section('content')
  <div class="card card-body">
    <form action="{{ route('guru-update', $guru->id) }}" method="post">
      @csrf
      @method("put")
      <div class="mb-3">
          <label >Kode Guru</label>
          <input class="form-control" name="kode_guru" value="{{ $guru->kode_guru }}">
        </div>
      <div class="mb-3">
        <label >Nama Guru</label>
        <input class="form-control" name="nama" value="{{ $guru->nama }}">
      </div>
      <div class="mb-3">
          <label >Jabatan</label>
          <input class="form-control" name="jabatan" value="{{ $guru->jabatan }}">
      </div>
      <div class="mb-3">
        <label >No Telpon</label>
        <input class="form-control" name="telpon" value="{{ $guru->telpon }}">
    </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>

@endsection