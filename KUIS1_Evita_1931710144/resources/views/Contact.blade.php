@extends('layouts.Master')
@section('title', 'Contact')

@section('content')

<section class="contact" style="margin-bottom: 14%">
    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container b-5">
            <h2 class="display-4 mb">CONTACT</h2>
            <p class="lead">
                <img class="card-img-top"
                    src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201909/contact-details-3381225_1280.jpeg?524JGkJvIBQ1imnKfpn2djsEHFX06JK7&size=770:433"
                    alt="Card image cap"><br>
                <a href="https://mail.google.com/"> Email : eputrinauli@gmail.com </a> &nbsp &nbsp <a
                    href="https://mail.google.com/"> Email : elfirasatyap@gmail.com </a><br>
                <a href="https://www.instagram.com/"> Instagram : @evitapns </a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp<a href="https://www.instagram.com/"> Instagram : @elfirasatya </a> <br>
                <a href="https://line.me/id/"> Line : evitapns. </a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="https://line.me/id/"> Line : ElfiraSatya_ </a> <br>
                <a href="https://www.whatsapp.com/"> WhatsApp : 0878xxxxxxxx </a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a
                    href="https://www.whatsapp.com/"> WhatsApp : 0821xxxxxxxx </a> <br>
            </p>
        </div>
    </div>
</section>

<div class="card">
    <div class="card-header text-center">
        <h3> MESSAGES </h3>
    </div>
    </br>
    <form action="/send" method="post">
        @csrf
        <div class="form-group user-name">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" required="required" name="name" placeholder="Name"></br>
        </div>
        <div class="form-group user-email">
            <label for="email">Email</label>
            <input type="email" class="form-control" required="required" name="email" placeholder="Email"></br>
        </div>
        <div class="form-group user-phone">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" name="phone" placeholder="Phone"></br>
        </div>
        <div class="form-group user-message">
            <label for="message">Message</label>
            <input type="text" class="form-control" name="message" placeholder="Write Message"></br>
        </div>
</div><!-- /.col-md-6 -->
<button type="submit" class="btn btn-primary btn-radiuszan" style="background-color: #9ACD32"><i class="fa fa-paper-plane" aria-hidden="true"></i>Send
</button><br><br>
</form>
<!-- Pagination -->
<ul class="pagination justify-content-center mb-4">
    <li class="page-item">
        <a class="page-link" href="http://127.0.0.1:8000/about">&larr; Prev</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="http://127.0.0.1:8000/pemesananuser">Next &rarr;</a>
    </li>
</ul>
@endsection
