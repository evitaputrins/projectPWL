@extends('layouts.Master')
@section('title','add')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3>Daftar Artikel</h3>
        </div>
        </br>
        </br>
        <form action="/create" method="post" enctype="multipart/form-data">

                @csrf
                    <div class="form-group">
                        <label for="title">Kota</label>
                        <input type="text" class="form-control"required="required" name="title" placeholder="Masukkan Nama Kota Disini"></br>
                    </div>
                    <div class="form-group">
                        <label for="continent">Provinsi</label>
                        <input type="text" class="form-control"required="required" name="continent" placeholder="Masukkan Provinsi Dari Kota Tersebut Disini"></br>
                    </div>
                    <div class="form-group">
                        <label for="content">Deskripsi</label>
                        <input type="text" class="form-control"required="required" name="content" placeholder="Masukkan Deskripsi Disini"></br>
                    </div>
                    <div class="form-group">
                        <label for="imageurl">Gambar</label>
                        <input type="file" class="form-control"required="required" name="image" placeholder="Link Image Here"></br>
                    </div>
                    <button type="submit" class="btn btn-primary btn-radiuszan"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Tambah Data</button><br><br>
                </form>
</div>
</div>

@endsection