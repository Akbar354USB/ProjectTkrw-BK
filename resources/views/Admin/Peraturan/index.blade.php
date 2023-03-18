@extends('backend.master')

@section('tittle')
    <title>Data Kelas</title>
@endsection

@section('content')
<div class="card card-body">
<div class="form-group row mb-1 mt-3">
<div class="col-sm-6 mb-3 mb-sm-0">
  <a href="{{ route('peraturan-create') }}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
</div>
</div>
  <table class="table table-striped mt-1">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">KODE PERATURAN</th>
      <th scope="col">NAMA PERATURAN</th>
      <th scope="col">SKOR</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
      {{-- @foreach ($kelas as $key => $item) --}}
      <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td>
          <a class="btn btn-primary" href="" >Edit</a>
          <form action="" method="post" style="display: inline" class="form-check-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Hapus</button>
          </form>
      </td>
      </tr>
    {{-- @endforeach --}}
  </tbody>
</table>
</div>
@endsection