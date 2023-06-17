@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Edit Pelanggaran</title>
@endsection

@section('content')
<div class="text-center">
    <h1>EDIT LAPORAN</h1>
  </div>
  <P></P>
  <P></P>
  <div class="card card-body">
    <form action="{{ route('laporan-update',$laporan->id) }}" method="post">
      @csrf
      @method("put")
      <div class="form-group">
        <label >NOMOR</label>
        <input class="form-control" name="nomor" value="{{ $laporan->nomor }}">
      </div>
      <div class="form-group">
        <label >NAMA SISWA</label>
          <select class="form-control" name="siswa_id">
            <option label="Pilih Siswa"></option>
            @foreach ($siswa as $item)
            <option @if($laporan->siswa_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label >RIWAYAT PELANGGARAN</label>
            <select class="form-control" name="riwayat_id">
              <option label="Pilih Riwayat Pelanggaran"></option>
              @foreach ($riwayat as $item)
              <option @if($laporan->riwayat_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->nama_pelanggaran }}</option>
              @endforeach
            </select>
          </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection