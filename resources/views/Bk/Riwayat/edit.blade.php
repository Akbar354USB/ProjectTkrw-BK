@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Edit Riwayat</title>
@endsection

@section('content')
  <div class="card card-body">
    <form action="{{ route('riwayat-update', $riwayat->id ) }}" method="post">
      @csrf
      @method("put")
      <div class="form-group">
        <select class="form-control" name="siswa_id">
          <option label="Nama Siswa"></option>
          @foreach ($siswa as $item)
          <option @if($riwayat->siswa_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->nama }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label >PELANGGARAN</label>
        <input class="form-control" name="nama_pelanggaran" value="{{ $riwayat->nama_pelanggaran }}">
      </div>
      <div class="form-group">
          <label >SKOR</label>
          <input class="form-control" name="skor" value="{{ $riwayat->skor }}">
        </div>
     
      {{-- <div class="form-group">
        <label >TANGGAL</label>
        <input class="form-control" name="tanggal" value="{{ $riwayat->tanggal }}">
      </div> --}}

      <div class="mb-3">
        <label class="form-label" for="basic-form-dob">Date of Birth</label>
        <input class="form-control" name="tanggal" value="{{ $riwayat->tanggal }}" id="basic-form-dob" type="date" />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection