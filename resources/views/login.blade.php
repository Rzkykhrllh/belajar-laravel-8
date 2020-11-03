<h1>Ini Form</h1>
<form action="masuk" method="POST">
    @csrf
    <input type="text" placeholder="id" name="username">
    <br/>
        @error('username')
            {{$message}}
        @enderror
    <br/>
    <input type="password" name="password">
    <br/>
        @error('password')
            {{$message}}
        @enderror
    <br/>
    <button type="submit">Login</button>
</form>