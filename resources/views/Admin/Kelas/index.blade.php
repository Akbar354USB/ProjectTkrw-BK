{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data Kelas</title>
  </head>
  <body>

    <div class="container mt-5">
      <h1 align="center">TAMPILAN DATA KELAS</h1>
      <a href="{{ route('kelas-create') }}" class="btn btn-primary mb-3">+ Data Kelas</a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">KODE KELAS</th>
                <th scope="col">NAMA KELAS</th>
                <th scope="col">KETERANGAN</th>
                <th scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kelas as $key => $item)
              <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $item->kode_kelas }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                  <a class="btn btn-primary" href="{{ route('kelas-edit', $item->id) }}">Edit</a>
                  <form action="{{ route('kelas-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
                    @csrf
                    @method("delete")
                      <button class="btn btn-danger" type="submit">Hapus</button>
                  </form>
              </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>

    </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> --}}
@extends('backend.master')

@section('content')
<div class="card card-body">
  <div class="container mt-5">
    <h1 align="center">TAMPILAN DATA KELAS</h1>
    <a href="{{ route('kelas-create') }}" class="btn btn-primary mb-3">+ Data Kelas</a>
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">KODE KELAS</th>
              <th scope="col">NAMA KELAS</th>
              <th scope="col">KETERANGAN</th>
              <th scope="col">AKSI</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kelas as $key => $item)
            <tr>
              <th scope="row">{{ $key + 1 }}</th>
              <td>{{ $item->kode_kelas }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->keterangan }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('kelas-edit', $item->id) }}">Edit</a>
                <form action="{{ route('kelas-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
                  @csrf
                  @method("delete")
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
  </div>
</div>

@endsection
