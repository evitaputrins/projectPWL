@extends('layouts.Master')
@section('title', 'Message')

@section('content')
<div class="container">
    <div class="row">

        <div class="card">
        <br><div class="card-header text-center">
                <h3> Daftar Message </h3>
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
                                <th>Phone</th>
                                <th>Message </th>
                                <th>Date</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $artic)
                            <tr>
                                <td>{{$artic->id}}</td>
                                <td>{{$artic->name}}</td>
                                <td>{{$artic->email}}</td>
                                <td>{{$artic->phone}}</td>
                                <td>{{$artic->message}}</td>
                                <td>{{$artic->created_at}}</td>

                                <td> <a href="message/edit/{{ $artic->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#87CEEB">Edit</a> 
                                <a href="message/delete/{{ $artic->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#FF7F50">Hapus</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                <a href="message/add" class="btn btn-primary" style="background-color: #9ACD32">Tambah Data</a> <br>
                <a href="/message/cetak_pdf" class="btn btn-primary" style="background-color: #9ACD32" target="_blank">CETAK PDF</a>
                <br>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
