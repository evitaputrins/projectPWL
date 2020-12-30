@extends('layouts.Master')
@section('title', 'Daftar Message')

@section('content')
<div class="container">
    <div class="row">

        <div class="card">
        <br><div class="card-header text-center">
                <h3> Daftar Pemesanan </h3>
            </div>

            </br>
            </br>
            <div class="card body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Kota Tujuan</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Date</th>
                            <th>Keterangan</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pemesanans as $artic)
                        <tr>
                            <td>{{$artic->id}}</td>
                            <td>{{$artic->nama}}</td>
                            <td>{{$artic->alamat}}</td>
                            <td>{{$artic->email}}</td>
                            <td>{{$artic->phone}}</td>
                            <td>{{$artic->tujuan}}</td>
                            <td>{{$artic->tanggalpesan}}</td>
                            <td>{{$artic->created_at}}</td>

                            <td> <a href="pemesanan/edit/{{ $artic->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#87CEEB">Edit</a></br>
                            <a href="pemesanan/delete/{{ $artic->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#FF7F50">Hapus</a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <a href="pemesanan/add" class="btn btn-primary" style="background-color: #9ACD32">Tambah Data</a> <br>
            <a href="/pemesanan/cetak_pdf" class="btn btn-primary" style="background-color: #9ACD32" target="_blank">CETAK PDF</a>
            <br>
        </div>
    </div>
</div>
</div>
</div>
@endsection