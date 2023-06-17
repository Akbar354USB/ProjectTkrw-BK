@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Index Laporan</title>
@endsection

@section('content')
<div class="text-center">
  <h1>LAPORAN MASUK</h1>
</div>
<P></P>
<P></P>
    <div class="card card-body">
      <div class="row">
        @foreach ($laporan as $item)
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <h1><strong>{{ $item->nomor }}</strong></h1>
              </div>

              <h3 class="profile-username text-center">{{ $item->siswa->nama }}</h3>

              <p class="text-muted text-center">{{ $item->siswa->nis }}</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Tanggal</b> <a class="float-right">{{ $item->created_at }}</a>
                </li>
                <li class="list-group-item">
                  <b>Pelanggaran</b> <a class="float-right">{{ $item->riwayat->nama_pelanggaran }}</a>
                </li>
              </ul>

              <a href="{{ route('laporan-detail', $item->id) }}" class="btn btn-primary btn-block"><b>Detail</b></a>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        @endforeach
      </div>
    </div>

  {{-- tag menambahkan pagination --}}
<div class="mt-2 float-right">
    {{ $laporan->links() }}
</div>

@endsection