<h1>Add user</h1>

<form action="adduser" method="POST">
    @csrf
    <label for="nama">Nama</form> </br>
    <input type="text" name="nama"> </br>
    
    <label for="kota">Kota</form> </br>
    <input type="text" name="kota"> </br>
        
    <label for="pekerjaan">Pekerjaan</form> </br>
    <input type="text" name="pekerjaan"> </br>

    <button type="submit">tambah/</button>
</form>