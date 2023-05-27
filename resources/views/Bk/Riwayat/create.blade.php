@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Create Riwayat</title>
@endsection

@section('content')
    <div class="card card-body">
      <form action="{{ route('riwayat-store') }}" method="post">
        @csrf
        <div class="form-group">
            <select class="form-control" name="siswa_id">
              <option label="Pilih Nama Siswa"></option>
              @foreach ($siswa as $item)
              <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
          </div>
        <div class="form-group">
            <label >PELANGGARAN</label>
            <input class="form-control" name="nama_pelanggaran">
            @error('nama_pelanggaran')
            <span class="text-danger">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label >SKOR</label>
            <input class="form-control" name="skor">
            @error('skor')
            <span class="text-danger">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        <div class="mb-3">
          <label class="form-label" for="basic-form-dob">TANGGAL</label>
          <input class="form-control" name="tanggal" id="basic-form-dob" type="date" />
          @error('tanggal')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection