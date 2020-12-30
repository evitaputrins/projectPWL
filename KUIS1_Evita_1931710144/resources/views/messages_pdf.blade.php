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
        <h5>Laporan Pesan dari User</h4>
</center>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message </th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @php $id=1 @endphp
        @foreach($message as $artic)
        <tr>
            <td>{{ $id++ }}</td>
            <td>{{$artic->name}}</td>
            <td>{{$artic->email}}</td>
            <td>{{$artic->phone}}</td>
            <td>{{$artic->message}}</td>
            <td>{{$artic->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>