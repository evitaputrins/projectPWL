@extends('layouts.Master')
@section('title', 'About')

@section('content')

<div class="card">
</br>
</br>

    <div class="card-header text-center">
        <h3> Data Diri Developer </h3>
    </div>
    </br>
    <table border="1" cellpadding="10">
        <tr>
            <td bgcolor="#9ACD32">Nama Lengkap</td>
            <td bgcolor="#9ACD32">Tempat, Tanggal Lahir</td>
            <td bgcolor="#9ACD32">NIM</td>
            <td bgcolor="#9ACD32">Instansi</td>
        </tr>
        <tr>
            <td>Elfira Satya Pramesti</td>
            <td>Probolinggo, 04 Januari 2001</td>
            <td>1931710014</td>
            <td>Politeknik Negeri Malang</td>
        </tr>
        <tr>
            <td>Evita Putri Nauli Simanungkalit</td>
            <td>Malang, 16 Juni 2001</td>
            <td>1931710144</td>
            <td>Politeknik Negeri Malang</td>
        </tr>
    </table>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="http://127.0.0.1:8000/home">&larr; Prev</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="http://127.0.0.1:8000/contact">Next &rarr;</a>
          </li>
        </ul>
</div>
@endsection
