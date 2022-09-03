<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
</head>
<body>
    INI LAMAN Admin
    <a href="{{route('logout')}}">KELUAR</a>
    <button>
    <a href="{{ route('adduser') }}">Tambahkan User</a>
</button>
<table border="3">
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Role</th>
        <th>Nomor Telepon</th>
        <th>Email</th>
        <th colspan="2">Tindakan</th>
    </tr>
    @foreach($data as $key => $user)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->no_telp }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('edituser', $user->id)}}">Edit</a>
                <form action="{{ route('deleteuser',$user->id) }}" method="Post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>