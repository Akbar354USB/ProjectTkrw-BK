@extends('backend.master')

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
          </div>
          <div class="form-group">
            <label >SKOR</label>
            <input class="form-control" name="skor">
          </div>
        {{-- <div class="form-group">
          <label >TANGGAL</label>
          <input type="text" class="form-control" name="tanggal">
      </div> --}}

      <div class="mb-3">
        <label class="form-label" for="basic-form-dob">TANGGAL</label>
        <input class="form-control" name="tanggal" id="basic-form-dob" type="date" />
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection