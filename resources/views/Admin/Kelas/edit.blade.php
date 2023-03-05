<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Kelas</title>
  </head>
  <body>

    <div class="container mt-5">
      <h1 align="center">HALAMAN EDIT KELAS</h1>
        <form action="{{ route('kelas-update', $kelas->id) }}" method="post">
            @csrf
            @method("put")
            <div class="form-group">
                <label >KODE KELAS</label>
                <input class="form-control" name="kode_kelas" value="{{ $kelas->kode_kelas }}">
              </div>
            <div class="form-group">
              <label >NAMA KELAS</label>
              <input class="form-control" name="nama" value="{{ $kelas->nama }}">
            </div>
            <div class="form-group">
                <label >KETERANGAN</label>
                <input class="form-control" name="keterangan" value="{{ $kelas->keterangan }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>

    </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>