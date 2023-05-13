@extends('backend.master')

@section('content')
    <div class="card card-body">
      <form action="{{ route('pelanggaran-store') }}" method="post">
        @csrf
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
            <label >NAMA PELANGGAR</label>
            <input class="form-control" name="nama_siswa">
            @error('nama_siswa')
            <span class="text-danger">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
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
          <input class="form-control" name="tanggal" id="basic-form-dob" type="date"/>
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