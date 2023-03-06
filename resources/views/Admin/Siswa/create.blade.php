@extends('backend.master')

@section('content')
    <div class="card card-body">
      <form action="" method="post">
        @csrf
        <div class="form-group">
          <label >KODE KELAS</label>
          <input class="form-control" name="kode_kelas">
        </div>
        <div class="form-group">
            <label >NAMA KELAS</label>
            <input class="form-control" name="nama">
          </div>
        <div class="form-group">
            <label >KETERANGAN</label>
            <input class="form-control" name="keterangan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection