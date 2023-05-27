@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Create Siswa</title>
@endsection

@section('content')
    <div class="card card-body">
      <form action="{{ route('siswa-store') }}" method="post">
        @csrf
        <div class="form-group">
          <label >NIS</label>
          <input class="form-control" name="nis">
          @error('nis')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
            <label >NAMA SISWA</label>
            <input class="form-control" name="nama">
            @error('nama')
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
          <label >JENIS KELAMIN</label>
          {{-- <input class="form-control" name="jenis_kelamin"> --}}
          <select name="jenis_kelamin" class="form-control">
            <option value="LAKI-LAKI">LAKI-LAKI</option>
            <option value="PEREMPUAN">PEREMPUAN</option>
          </select>
          @error('jenis_kelamin')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
        <div class="form-group">
          <label >ALAMAT</label>
          <input class="form-control" name="alamat">
          @error('alamat')
          <span class="text-danger">
            <strong>{{ $message }}</strong>     
          </span>
        @enderror
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection