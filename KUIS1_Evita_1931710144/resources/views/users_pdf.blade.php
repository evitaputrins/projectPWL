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
        <h5>Laporan User</h4>
</center>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Tanggal Pembuatan Akun</th>
            <th>Gambar</th>
            
        </tr>
    </thead>
    <tbody>
        @php $id=1 @endphp
        @foreach($user as $user)
        <tr>
            <td>{{ $id++ }}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->roles}}</td>
            <td>{{$user->created_at}}</td>
            <td><img src="{{public_path('storage/'.$user->imageurl)}}" alt="$user->imageurl" width="80" height="80"></td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>