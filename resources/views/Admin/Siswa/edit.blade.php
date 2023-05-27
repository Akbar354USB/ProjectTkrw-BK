@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Edit Siswa</title>
@endsection

@section('content')
  <div class="card card-body">
    <form action="{{ route('siswa-update', $siswa->id ) }}" method="post">
      @csrf
      @method("put")
      <div class="form-group">
        <label >NIS</label>
        <input class="form-control" name="nis" value="{{ $siswa->nis }}">
      </div>
      <div class="form-group">
          <label >NAMA SISWA</label>
          <input class="form-control" name="nama" value="{{ $siswa->nama }}">
        </div>
      <div class="form-group">
          <select class="form-control" name="kelas_id">
            <option label="Pilih Kelas"></option>
            @foreach ($kelas as $item)
            <option @if($siswa->kelas_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
          </select>
        </div>
      <div class="form-group">
        <label >JENIS KELAMIN</label>
        <input class="form-control" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}">
    </div>
      <div class="form-group">
        <label >ALAMAT</label>
        <input class="form-control" name="alamat" value="{{ $siswa->alamat }}">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection