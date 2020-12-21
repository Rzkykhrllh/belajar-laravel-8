<h1>Upload filemu disini</h1>

<form action="upload" method="POST">
    @csrf
    <label for="upload"/>Upload</form>
    <input type="file" name="nama_file">
    <button type="submit">SUBTMIT</button>
</form>