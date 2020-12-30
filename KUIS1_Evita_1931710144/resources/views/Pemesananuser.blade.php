@extends('layouts.Master')
@section('title', 'Pemesanan User')

@section('content')

<section class="pemesananuser" style="margin-bottom: 14%">
    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="card-header text-center">
            <h3> Silahkan Isi Data Diri Anda : </h3>
        </div>
    </div>


    <form action="/sendpemesanan" method="post">
        @csrf
        </div><!-- /.col-md-6 -->
        <div class="col-md-6">
            <div class="form-group user-name">Nama Lengkap Anda</br>
                <label for="nama" class="sr-only">Nama</label>
                <input type="text" class="form-control" required="required" name="nama" placeholder=" Tulis Nama Anda disini"></br>
            </div>
        </div><!-- /.col-md-6 -->
        <div class="col-md-6">
            <div class="form-group user-alamat">Alamat Lengkap Anda</br>
                <label for="alamat" class="sr-only">Alamat</label>
                <input type="text" class="form-control" required="required" name="alamat" placeholder="Tulis Alamat Anda disini"></br>
            </div>
        </div><!-- /.col-md-6 -->
        <div class="col-md-6">
            <div class="form-group user-email">Email Anda</br>
                <label for="email" class="sr-only">Email</label>
                <input type="email" class="form-control" required="required" name="email" placeholder="Tulis Email Anda disini"></br>
            </div>
        </div><!-- /.col-md-6 -->
        <div class="col-md-6">
            <div class="form-group user-phone">Nomor Telepon</br>
                <label for="phone" class="sr-only">Phone</label>
                <input type="text" class="form-control" required="required" name="phone" placeholder="Tulis Nomor Telepon Anda disini"></br>
            </div>
        </div><!-- /.col-md-6 -->
        <div class="col-md-6">
            <div class="form-group user-tujuan">Kota Tujuan</br>
                <label for="tujuan" class="sr-only">Email</label>
                <input type="tujuan" class="form-control" required="required" name="email" placeholder="Tulis Kota Tujuan Anda disini"></br>
            </div>
        </div><!-- /.col-md-6 -->
        <div class="col-md-6">
            <div class="form-group user-tanggalpesan">Tanggal Pemesanan</br>
                <label for="tanggalpesan" class="sr-only">Tanggal</label>
                <textarea class="form-control testt" required="required" name="tanggalpesan" placeholder="Tulis Tanggal Pemesanan Anda disini"></textarea>
            </div>
        </div><!-- /.col-md-6 -->
        <button type="submit" class="btn btn-primary btn-radiuszan" style="background-color: #9ACD32"><i
                class="fa fa-paper-plane" aria-hidden="true"></i>Kirim Data
        </button><br><br>
    </form>
</section>

<!-- Pagination -->
<ul class="pagination justify-content-center mb-4">
    <li class="page-item">
        <a class="page-link" href="http://127.0.0.1:8000/contact">&larr; Prev</a>
    </li>
    <li class="page-item disabled">
        <a class="page-link" href="#">Next &rarr;</a>
    </li>
</ul>
@endsection
