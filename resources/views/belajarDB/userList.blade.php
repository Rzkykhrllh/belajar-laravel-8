<h1>Daftar nama user</h1>

<table border="3">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Kota</td>
        <td>Pekerjaan</td>
    </tr>
    
    @foreach ($users as $item)
    <tr>
        <td>{{$item["no"]}}</td>
        <td>{{$item["name"]}}</td>
        <td>{{$item["city"]}}</td>
        <td>{{$item["job"]}}</td>
        <td>
            <a href={{url("deleteUser/".$item->name)}}>delete</a>
        </td>

        <td>
            <a href={{url("editUser/".$item->name)}}>Edit</a>
        </td>

    </tr>
        
    @endforeach
</table>

{{-- <span>{{$users->links() }}</span> --}}
