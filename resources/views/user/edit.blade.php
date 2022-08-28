<table border="3">
    <tr>
        <th>Edit Data Klien</th>
    </tr>
</table>
<table border="3">
    <tr>
        <td>
            <form action="/user/{{$user->id}}" method="POST">
                @method('put')
                @csrf
                <input type="text" name="Nama" placeholder="Nama" value="{{$user->Nama}}"><br>
                <select name="Role">
                    <option value="">Pilih Role</option>
                    <option value="A" @if($user->Role == "admin") selected @endif>Admin</option>
                    <option value="L" @if($user->Role == "librarian") selected @endif>Librarian</option>
                    <option value="G" @if($user->Role == "guest") selected @endif>Guest</option>
                </select><br>
                <input type="text" name="Alamat" placeholder="Alamat" value="{{$klien->Alamat}}"></textarea><br>
                <input type="text" name="NIK" placeholder="NIK" value="{{$klien->NIK}}"><br>
                <input type="text" name="NoTelp" placeholder="NoTelp" value="{{$klien->NoTelp}}"><br>
                <input type="text" name="Gmail" placeholder="Gmail" value="{{$klien->Gmail}}"><br>
                <input type="password" name="Password" placeholder="Password" value="{{$klien->Password}}"><br>
                <input type="submit" name="Submit" value="Update"><br>
            </form>
        </td>
    </tr>
</table>