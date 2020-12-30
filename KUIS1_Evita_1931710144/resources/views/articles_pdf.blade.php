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
        }
</style>
<center>
        <h5>Laporan Artikel</h4>
</center>

<table class='table table-bordered'>
    <thead>
        <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Benua</th>
                <th>Isi</th>
                <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
        @php $id=1 @endphp
        @foreach($article as $artic)
        <tr>
                <td>{{ $id++ }}</td>
                <td>{{$artic->title}}</td>
                <td>{{$artic->continent}}</td>
                <td>{{$artic->content}}</td>
                <td><img src="{{public_path('storage/'.$artic->imageurl)}}" alt="$artic->imageurl" width="80" height="80"></td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
