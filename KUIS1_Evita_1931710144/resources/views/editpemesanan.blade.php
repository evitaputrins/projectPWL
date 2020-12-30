@extends('layouts.Master')
@section('title','Edit')

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3> Daftar Pemesanan User </h3>
            </div>
            </div>
            </br>
            <form action="/pemesanan/update/{{$pemesanan->id}}" method="post" enctype="multipart/form-data">
            {{@csrf_field()}}
            <input type="hidden" name="id" value="{{$pemesanan->id}}"></br>
                     <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control"required="required" name="nama" placeholder="Nama anda"></br>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control"required="required" name="alamat" placeholder="Tulis Alamat disini"></br>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control"required="required" name="email" placeholder="Tulis Email disini"></br>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" required="required" name="phone" placeholder="Tulis Nomor Telepon disini"></br>
                    </div>
                    <div class="form-group">
                        <label for="tujuan">Kota Tujuan</label>
                        <input type="tujuan" class="form-control"required="required" name="tujuan" placeholder="Tulis Kota Tujuan disini"></br>
                    </div>
                    <div class="form-group">
                        <label for="tanggalpesan">Tanggal</label>
                        <input type="text" class="form-control" required="required" name="tanggalpesan" placeholder="Tulis Tanggal Pemesanan disini"></br>
                    </div>
            <button type="submit" name="edit" class="btn btn-primary float-center">Ubah Data</button><br><br>
            </form>
        </div>
    </div>
@endsection