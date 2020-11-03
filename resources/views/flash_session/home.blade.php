<h1>Ini Form ngirim pesan</h1>

@if(session("username"))
    <h3 style="background: aquamarine">
        Pesan berhasil terkirim ke {{session("username")}}
    </h3>
@endif

<form action="send" method="POST">
    @csrf
    <label for="username">Penerima</label>
    <input type="text" placeholder="id" name="username">
    
    <label for="username">Isi Pesan</label>
    <input type="text" placeholder="pesan" name="pesan">
    
    <button type="submit">Kirim</button>
</form>