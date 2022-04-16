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
        <form action="../updateEvent/{{ $event['id'] }}" method="post" enctype="multipart/form-data">
            @csrf 
            <h2>title</h2>
            <input required type="text" name="title" id="" value="{{ $event['title'] }}">
            
            <h2>description</h2>
            <input required type="text" name="desc" value="{{ $event['description'] }}" >
            <h2>instagram</h2>
            <input required type="text" name="ig" value="{{ $event['instagram'] }}">
            
            <input type="submit" value="Update">
        </form>
        <form action="../updateLogo/{{ $event['title'] }}" method="post"  enctype="multipart/form-data">
            @csrf
            <h2>logo</h2>
            <input type="hidden" name="oldLogo" value="{{ $event['logo'][0] }}">
            <input multiple required type="file" name="logo" id="">
            <img src="{{ asset('storage/'.$event['logo'][0]) }}" style="width: 100px" alt="">
            <input type="submit" value="Update">
        </form>
        @if(count($event['image']) < 5)
        <form method="post" action="../uploadImage/{{ $event['title'] }}" enctype="multipart/form-data">
            @csrf
            <h2>Gambar</h2>
            <input required multiple type="file" name="image[]">
            <input type="submit" value="Update">
        </form>
        @endif  
        <form action="../updateImage/{{ $event['title'] }}" method="post">
            @csrf<h2>Delete Image</h2>
            @foreach($event['image'] as $image)
            
            <input type="checkbox" name="image[]" value="{{ $image }}" id="">
            <img src="{{ asset('storage/'.$image) }}" style="width: 100px" alt="">
            @endforeach
            <input type="submit" value="Delete">
        </form>
    @endSection
    
</body>
</html>