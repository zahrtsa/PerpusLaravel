<table border="3">
    <tr>
        <th>Try Add Data</th>
    </tr>
</table>
<table border="3">
    <tr>
        <td>
            <form action="{{ route('prosescreate') }}" method="POST">
                @csrf
                @method('POST')
                <input type="text" name="name" placeholder="Name"><br>
                <select name="Role">
                    <option value="" selected>Pilih Role</option>
                    <option value="admin" @if($data->Role == "admin") selected @endif>Admin</option>
                    <option value="guest" @if($data->Role == "guest") selected @endif>Guest</option>
                </select><br>
                <input type="text" name="no_telp" placeholder="Nomor Telepon"><br>
                <input type="text" name="email" placeholder="Email"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" name="Submit"><br>
            </form>
        </td>
    </tr>
</table>