<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pegawai</title>
</head>
<body>
    <h1>Formulir Pegawai</h1>
    <form action="/formulir/proses" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat"></textarea><br><br>
        <button type="submit">Proses</button>
    </form>
</body>
</html>
