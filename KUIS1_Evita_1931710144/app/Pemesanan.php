<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = ['nama','alamat','email','phone','tanggalpesan'];
}
