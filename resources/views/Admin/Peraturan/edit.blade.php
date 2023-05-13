@extends('backend.master')

@section('content')
  <div class="card card-body">
    <form action="{{ route('peraturan-update', $peraturan->id) }}" method="post">
      @csrf
      @method("put")
      <div class="mb-3">
          <label >Kode Peraturan</label>
          <input class="form-control" name="kode_peraturan" value="{{ $peraturan->kode_peraturan }}">
        </div>
      <div class="mb-3">
        <label >Nama Peraturan</label>
        <input class="form-control" name="nama" value="{{ $peraturan->nama }}">
      </div>
      <div class="mb-3">
          <label >Point Pelanggaran</label>
          <input class="form-control" name="skor" value="{{ $peraturan->skor }}">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>

@endsection