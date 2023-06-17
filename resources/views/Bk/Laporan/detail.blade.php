@extends('backend.master')

@section('tittle')
    <title>B-Konseling | Detail Laporan</title>
@endsection

@section('content')
<div class="text-center">
    <h1>DETAIL LAPORAN</h1>
  </div>
  <P></P>
  <P></P>
  <div class="card card-body">
    <div class="row">
      <div class="col-md-4 ml-3">
        <div class="info-box">
          <span class="info-box-icon bg-primary"><i class="far fa-envelope"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">NOMOR LAPORAN</span>
            <span class="info-box-number"><h1><strong>{{ $laporan->nomor }}</strong></h1></span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div> 
      
      
  
      <div class="col-md-7 ml-3 mr-1">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <h1 class="profile-username text-center">LAPORAN</h1>
            <span><h6 class="text-center">{{ $laporan->created_at }}</h6></span>
            <p></p>
            <p></p>
  
            <table class="table table-hover">
              <tr>
                <td align="left"><b>NAMA LENGKAP</b></td>
                <td align="left"><b>:</b> {{ $laporan->siswa->nama }}</td>
                <td></td>
              </tr>
              <tr>
                <td align="left"><b>NIS</b></td>
                <td align="left"><b>:</b> {{ $laporan->siswa->nis }}</td>
                <td></td>
              </tr>
              <tr>
                <td align="left"><b>KELAS</b></td>
                <td align="left"><b>:</b> {{ $laporan->siswa->kelas->nama }}</td>
                <td></td>
                <tr>
                  <td align="left"><b>PELANGGARAN</b></td>
                  <td align="left"><b>:</b> {{ $laporan->riwayat->nama_pelanggaran }}</td>
                  <td></td>
              </tr>
              <tr>
                <td align="left"><b>POINT PELANGGARAN</b></td>
                <td align="left"><b>:</b> {{ $laporan->riwayat->skor }}</td>
                <td></td>
            </tr>
            <tr>
              <td align="left"><b>KETARANGAN</b></td>
              <td align="left"><b>:</b> {{ $laporan->keterangan}}</td>
              <td></td>
          </tr>
          <tr>
            <td align="left"><i>tdd<u>  PIHAK BK</u></i></td>
            <td align="left"></td>
            <td></td>
        </tr>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div> 
    </div>  
  </div>  
@endsection