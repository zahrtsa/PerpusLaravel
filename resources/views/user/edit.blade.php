<table border="3">
    <tr>
        <th>Edit Data Klien</th>
    </tr>
</table>
<table border="3">
    <tr>
        <td>
            <form action="{{ route('prosesupdate') }}" method="POST">
                @csrf
                {{ csrf_field() }}
                <input type="text" name="id" value="{{ $data->id }}" hidden="true"/>
                <input type="text" name="name" placeholder="Name" value="{{$data->name}}"><br>
                <select name="Role">
                    <option value="">Pilih Role</option>
                    <option value="A" @if($data->Role == "admin") selected @endif>Admin</option>
                    <option value="G" @if($data->Role == "guest") selected @endif>Guest</option>
                </select><br>
                <input type="text" name="no_elp" placeholder="NoTelp" value="{{$data->no_telp}}"><br>
                <input type="text" name="email" placeholder="Email" value="{{$data->email}}"><br>
                <input type="password" name="password" placeholder="Password" value="{{$data->password}}"><br>
                <input type="submit" name="Submit" value="Update"><br>
            </form>
        </td>
    </tr>
</table>