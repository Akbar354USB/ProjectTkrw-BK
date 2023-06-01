@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Index Peraturan</title>
@endsection

@section('content')
<div class="text-center">
  <h1>DAFTAR PERATURAN</h1>
</div>
<P></P>
<P></P>
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
      @foreach ($peraturan as $key => $item)
      <tr>
      <th scope="row">{{ $key + 1 }}</th>
      <td>{{ $item ->kode_peraturan }}</td>
      <td>{{ $item->nama }}</td>
      <td>{{ $item->skor }}</td>
      <td>
          <a class="btn btn-primary" href="{{ route('peraturan-edit', $item->id) }}" >Edit</a>
          <form action="{{ route('peraturan-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Hapus</button>
          </form>
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>


<div class="mt-2 float-right">
  {{ $peraturan->links() }}
</div>


@if (session('status'))
<script>
  Swal.fire({
    icon : 'success',
    title : 'Sukses!',
    text : "{{ session('status') }}",
  });
</script>
@endif

@endsection