@extends('backend.master')

@section('content')
    <div class="card card-body">
      <form action="{{ route('guru-store') }}" method="post">
        @csrf
        <div class="form-group">
          <label >KODE GURU</label>
          <input class="form-control" name="kode_guru">
        </div>
        <div class="form-group">
            <label >NAMA GURU</label>
            <input class="form-control" name="nama">
          </div>
        <div class="form-group">
            <label >JABATAN</label>
            <input class="form-control" name="jabatan">
        </div>
        <div class="form-group">
            <label >NO TELEPON</label>
            <input class="form-control" name="telpon">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection