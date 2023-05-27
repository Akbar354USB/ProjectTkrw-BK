@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Create kelas</title>
@endsection

@section('content')
    <div class="card card-body">
    <form action="{{ route('kelas-store') }}" method="post">
      @csrf
      <div class="mb-3">
        <label>Kode Kelas</label>
        <input class="form-control" name="kode_kelas">
        @error('kode_kelas')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Nama Kelas</label>
        <input class="form-control" name="nama">
        @error('nama')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Keterangan</label>
        <input class="form-control" name="keterangan">
        @error('keterangan')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <button class="btn btn-primary" type="submit">Submit</button>
    </form>
  </div>
  
@endsection

