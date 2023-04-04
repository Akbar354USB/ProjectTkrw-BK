@extends('backend.master')

@section('content')
    <div class="card card-body">
      <form action="" method="post">
        @csrf
        <div class="form-group">
          <label >NIS</label>
          <input class="form-control" name="nis">
        </div>
        <div class="form-group">
            <label >NAMA SISWA</label>
            <input class="form-control" name="nama">
          </div>
        <div class="form-group">
            <select class="form-control" name="kelas_id">
              <option label="Pilih Kelas"></option>
              {{-- @foreach ($kelas as $item)
              <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach --}}
            </select>
          </div>
        <div class="form-group">
          <label >JENIS KELAMIN</label>
          <input class="form-control" name="jenis_kelamin">
      </div>
        <div class="form-group">
          <label >ALAMAT</label>
          <input class="form-control" name="alamat">
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection