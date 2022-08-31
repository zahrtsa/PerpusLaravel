<button>
    <a href="/User/create">Tambahkan Klien</a>
</button>
<table border="3">
    <tr>
        <th>id</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>NIK</th>
        <th>No Telp</th>
        <th>Gmail</th>
        <th colspan="2">Tindakan</th>
    </tr>
    @foreach($data as $key => $user)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->no_telp }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td><a href="{{ route('edituser')}}">Edit</a></td>
        </tr>
    @endforeach
</table>