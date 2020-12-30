@extends('layouts.Master')
@section('title','Edit')

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3> Daftar Message </h3>
        </div>
    </div>
    </br>
    <form action="/message/update/{{$message->id}}" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}
        <input type="hidden" name="id" value="{{$message->id}}"></br>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" required="required" name="name" placeholder="Name"></br>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" required="required" name="email" placeholder="Email"></br>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" name="phone" placeholder="Phone"></br>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" class="form-control" name="message" placeholder="Message"></br>
        </div>

    <button type="submit" name="edit" class="btn btn-primary float-center">Ubah Data</button><br><br>
    </form>
</div>
</div>
@endsection
