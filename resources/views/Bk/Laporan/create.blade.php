@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Create Laporan</title>
@endsection

@section('content')
    <div class="card card-body">
      <form action="{{ route('laporan-store') }}" method="post">
        @csrf
        <div class="form-group">
          <label >Nomor</label>
          <input class="form-control" name="nomor">
          @error('nomor')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
            <select class="form-control" name="siswa_id">
              <option label="Pilih siswa"></option>
              @foreach ($siswa as $item)
              <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
            @error('siswa_id')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          </div>
          <div class="form-group">
            <select class="form-control" name="riwayat_id">
              <option label="Pilih Riwayat Pelanggaran"></option>
              @foreach ($riwayat as $item)
              <option value="{{ $item->id }}">{{ $item->nama_pelanggaran }}</option>
              @endforeach
            </select>
            @error('riwayat_id')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" rows="4" name="keterangan"></textarea>
          </div>
          @error('keterangan')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection