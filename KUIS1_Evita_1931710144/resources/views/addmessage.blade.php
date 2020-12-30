@extends('layouts.Master')
@section('title','add')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3>Daftar Message</h3>
        </div>
        </br>
        </br>
        <form action="/createmessage" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group"><br><br>
                        <label for="name">Name</label>
                        <input type="text" class="form-control"required="required" name="name" placeholder="Name"></br>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control"required="required" name="email" placeholder="Email"></br>
                    </div>
                    <div class="form-group user-phone">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Phone"></br>
                    </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6"><br><br>
                    <div class="form-group user-message">
                        <label for="message">Message</label>
                        <textarea class="form-control testt"required="required" name="message" placeholder="Write Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-radiuszan"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Tambah Data</button><br><br>
                </form>
</div>
</div>

@endsection