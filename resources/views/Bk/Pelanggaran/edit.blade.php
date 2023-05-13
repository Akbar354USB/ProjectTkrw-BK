@extends('backend.master')

@section('content')
  <div class="card card-body">
    <form action="{{ route('pelanggaran-update', $pelanggaran->id) }}" method="post">
      @csrf
      @method("put")
      <div class="form-group">
        <label >PELANGGARAN</label>
        <input class="form-control" name="nama_pelanggaran" value="{{ $pelanggaran->nama_pelanggaran }}">
      </div>
      <div class="form-group">
          <label >NAMA PELANGGAR</label>
          <input class="form-control" name="nama_siswa" value="{{ $pelanggaran->nama_siswa }}">
        </div>
      <div class="form-group">
          <select class="form-control" name="kelas_id">
            <option label="Pilih Kelas"></option>
            @foreach ($kelas as $item)
            <option @if($pelanggaran->kelas_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
          </select>
        </div>
      <div class="form-group">
        <label >TANGGAL</label>
        <input class="form-control" name="tanggal" value="{{ $pelanggaran->tanggal }}" type="date">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection