<h1>Ini data dari API</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>email</th>
        <th>Foto</th>
    </tr>

    @foreach ($collection as $item)
        <tr>
            <td>{{$item["id"]}}</td>
            <td>{{$item["first_name"]." ".$item["last_name"]}}</td>
            <td>{{$item["email"]}}</td>
            <td>
                <img src="{{$item["avatar"]}}">
            </td>

        </tr>
    @endforeach
</table>