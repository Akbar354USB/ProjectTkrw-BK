@extends('backend.master')

@section('content')
    <div class="card card-body">
      <form action="{{ route('peraturan-store') }}" method="post">
        @csrf
        <div class="form-group">
          <label >KODE PERATURAN</label>
          <input class="form-control" name="kode_peraturan">
          @error('kode_peraturan')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
            <label >NAMA PERATURAN</label>
            <input class="form-control" name="nama">
          @error('nama')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          </div>
        <div class="form-group">
            <label >POINT PELANGGARAN</label>
            <input class="form-control" name="skor">
            @error('skor')
            <span class="text-danger">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection