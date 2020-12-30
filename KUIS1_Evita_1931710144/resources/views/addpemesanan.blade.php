@extends('layouts.Master')
@section('title','add')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3>Daftar Pemesanan</h3>
        </div>
        </br>
        </br>
        <form action="/createpemesanan" method="post" enctype="multipart/form-data">

                @csrf
                    <div class="form-group">
                    <label for="nama">Nama</label>
                        <input type="text" class="form-control"required="required" name="nama" placeholder="Nama anda"></br>
                    </div>
                    
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control"required="required" name="alamat" placeholder="Tulis Alamat disini"></br>
                    </div>
                    
                        <label for="email">Email</label>
                        <input type="email" class="form-control"required="required" name="email" placeholder="Tulis Email disini"></br>
                    </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" required="required" name="phone" placeholder="Tulis Nomor Telepon disini"></br>
                    </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <label for="tujuan">Kota Tujuan</label>
                        <input type="text" class="form-control" required="required" name="tujuan" placeholder="Tulis Kota Tujuan disini"></br>
                    </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <label for="tanggalpesan">Tanggal</label>
                        <textarea class="form-control testt"required="required" name="tanggalpesan" placeholder="Tulis Tanggal Pemesanan disini"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-radiuszan"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Tambah Data</button><br><br>
                </form>
</div>
</div>

@endsection