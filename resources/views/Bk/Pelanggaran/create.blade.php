@extends('backend.master')

@section('content')
    <div class="card card-body">
      <form action="{{ route('pelanggaran-store') }}" method="post">
        @csrf
        <div class="form-group">
            <label >PELANGGARAN</label>
            <input class="form-control" name="nama_pelanggaran">
          </div>
          <div class="form-group">
            <label >NAMA PELANGGAR</label>
            <input class="form-control" name="nama_siswa">
          </div>
        <div class="form-group">
            <select class="form-control" name="kelas_id">
              <option label="Pilih Kelas"></option>
              @foreach ($kelas as $item)
              <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
          </div>
        <div class="form-group">
          <label >TANGGAL</label>
          <input type="text" class="form-control" name="tanggal">
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection