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
        <h1>add</h1>
        <form action="addProcess" enctype="multipart/form-data" method="post">
            @csrf 
            <h2>title</h2>
            <input required type="text" name="title" id="">
            <h2>logo</h2>
            <input required type="file" name="logo" id="">
            <h2>description</h2>
            <input required type="text" name="desc">
            <h2>instagram</h2>
            <input required type="text" name="ig">
            <h2>Gambar</h2>
            <input required multiple type="file" name="image[]">
            <input type="submit" value="Submit">
        </form>
    @endSection
</body>
</html>