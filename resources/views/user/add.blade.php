<table border="3">
    <tr>
        <th>Try Add Data</th>
    </tr>
</table>
<table border="3">
    <tr>
        <td>
            <form action="{{ url('prosescreate') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name" value="{{$user->name}}"><br>
                <select name="Role">
                    <option value="">Pilih Role</option>
                    <option value="A" @if($user->Role == "admin") selected @endif>Admin</option>
                    <option value="L" @if($user->Role == "librarian") selected @endif>Librarian</option>
                    <option value="G" @if($user->Role == "guest") selected @endif>Guest</option>
                </select><br>
                <input type="text" name="no_telp" placeholder="NoTelp" value="{{$user->no_telp}}"><br>
                <input type="text" name="email" placeholder="Email" value="{{$user->email}}"><br>
                <input type="password" name="password" placeholder="Password" value="{{$user->password}}"><br>
                <input type="submit" name="Submit" value="add"><br>
            </form>
        </td>
    </tr>
</table>