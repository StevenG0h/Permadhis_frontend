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
        <form action="../updateProcess" enctype="multipart/form-data" method="post">
            @csrf 
            <h2>title</h2>
            <input required type="text" name="title" id="" value="{{ $event['title'] }}">
            <h2>logo</h2>
            <input required type="file" name="logo" id="">
            <h2>description</h2>
            <input required type="text" name="desc" value="{{ $event['description'] }}" >
            <h2>instagram</h2>
            <input required type="text" name="ig" value="{{ $event['instagram'] }}">
            @if(count($event['image']) <= 5)
            <h2>Gambar</h2>
            <input required multiple type="file" name="image[]">
            @endif
            <input type="submit" value="Submit">
        </form>
        <form action="../updateImage/{{ $event['id'] }}" method="post">
            @csrf
            @foreach($event['image'] as $image)
            <input type="checkbox" name="image[]" value="{{ $image }}" id="">
            <img src="{{ asset('storage/'.$image) }}" style="width: 100px" alt="">
            @endforeach
            <input type="submit" value="Delete">
        </form>
    @endSection
    
</body>
</html>