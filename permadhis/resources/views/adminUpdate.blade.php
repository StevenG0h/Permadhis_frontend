<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('adminNav.adminNav')
    @section('admin')
        <h1>update</h1>
        <form action="addProcess" enctype="multipart/form-data" method="post">
            @csrf 
            <h2>title</h2>
            <input required type="text" name="title" id="" value="{{ $data[0]['title'] }}">
            <h2>logo</h2>
            <input required type="file" name="logo" id="">
            <h2>description</h2>
            <input required type="text" name="desc" value="{{ $data[0]['description'] }}">
            <h2>instagram</h2>
            <input required type="text" name="ig" value="{{ $data[0]['instagram'] }}">
            <h2>Gambar</h2>
            <input required multiple type="file" name="image[]">
            <input type="submit" value="Submit">
        </form>
    @endSection
</body>
</html>