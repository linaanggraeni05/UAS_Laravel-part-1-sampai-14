<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorial laravel#9:passing data controller ke view laravel-www.malasngoding.com</title>
</head>
<body>
    <h1> Tutorial laravel</h1>

    <a href="https://malasngoding.com/category/laravel">www.malasngoding.com</a>
    
    <br>

    <p>Nama :{{$nama}}</p>
    <p>Mata pelajaran</p>
    <ul>
    
    @foreach($matkul as $m)
    <li>{{ $m}}</li>
    @endforeach
   </ul>

</body>
</html>