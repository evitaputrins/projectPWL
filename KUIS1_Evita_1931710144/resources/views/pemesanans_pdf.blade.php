<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
        body{
            background-color : #cce6ff;
        }
        table tr td,
        table tr th{
        font-size: 9pt;
        padding: 5px 8px;
        }

</style>
<center>
        <h5>Laporan Pemesanan User</h4>
</center>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Alamat User</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Kota Tujuan</th>
            <th>Tanggal Pemesanan</th>
        </tr>
    </thead>
    <tbody>
        @php $id=1 @endphp
        @foreach($pemesanan as $artic)
        <tr>
            <td>{{ $id++ }}</td>
            <td>{{$artic->nama}}</td>
            <td>{{$artic->alamat}}</td>
            <td>{{$artic->email}}</td>
            <td>{{$artic->phone}}</td>
            <td>{{$artic->tujuan}}</td>
            <td>{{$artic->tanggalpesan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>