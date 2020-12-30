@extends('layouts.Master')
@section('title', 'Manage User')

@section('content')
<div class="container">


    <div class="card">
    <br><div class="card-header text-center">
            <h3> Daftar User </h3>
        </div>

        </br>
        </br>
        <div class="card body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $artic)
                    <tr>
                        <td>{{$artic->id}}</td>
                        <td>{{$artic->name}}</td>
                        <td>{{$artic->email}}</td>
                        <td>{{$artic->created_at}}</td>

                        <td> <img src="{{asset('/storage/'.$artic->imageurl) }}" alt="imageCap"></td>
                        <td> <a href="user/edit/{{ $artic->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#87CEEB">Edit</a> &nbsp &nbsp
                        <a href="user/delete/{{ $artic->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#FF7F50">Hapus</a> </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <a href="manageuser/add" class="btn btn-primary" style="background-color: #9ACD32">Tambah Data</a> <br>
        <a href="user/cetak_pdf" class="btn btn-primary" style="background-color: #9ACD32" target="_blank">CETAK PDF</a> </td>
        <br>
    </div>
</div>
@endsection
