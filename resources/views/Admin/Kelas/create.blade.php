@extends('backend.master')

@section('content')
    <div class="card card-body">
    <form action="{{ route('kelas-store') }}" method="post">
      @csrf
      <div class="mb-3">
        <label>Kode Kelas</label>
        <input class="form-control" name="kode_kelas">
      </div>
      <div class="mb-3">
        <label>Nama Kelas</label>
        <input class="form-control" name="nama">
      </div>
      <div class="mb-3">
        <label>Keterangan</label>
        <input class="form-control" name="keterangan">
      </div>

      <button class="btn btn-primary" type="submit">Submit</button>
    </form>
  </div>
  
@endsection

