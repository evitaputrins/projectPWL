@extends('layouts.Master')
@section('title', 'Manage Article')

@section('content')
<div class="container">
    <div class="row">
        
            <div class="card">
                <br><div class="card-header text-center">
                    <h3> Daftar Artikel </h3>
                </div>

                </br>
                </br>
                <div class="card body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Tanggal</th>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($article as $artic)
                            <tr>
                                <td>{{$artic->id}}</td>
                                <td>{{$artic->title}}</td>
                                <td>{{$artic->continent}}</td>
                                <td>{{$artic->created_at}}</td>
                                
                                    <td> <img src="{{asset('/storage/'.$artic->imageurl) }}" alt="imageCap"></td>
                                    <td> <a href="article/edit/{{ $artic->id }}" class="btn btn-primary btn-radiuszan"style="background-color:#87CEEB">Edit</a> &nbsp &nbsp
                                    <a href="article/delete/{{ $artic->id }}" class="btn btn-primary btn-radiuszan"style="background-color:#FF7F50">Hapus</a> </td>
                                    
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                <a href="manage/add" class="btn btn-primary" style="background-color: #9ACD32">Tambah Data</a> <br>
                <a href="/cetak_pdf" class="btn btn-primary" style="background-color: #9ACD32" target="_blank">CETAK PDF</a>
                <br>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
