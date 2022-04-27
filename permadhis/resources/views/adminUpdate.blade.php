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
    <div class="container">
        <h1 class="text-center pt-3">Update</h1>
        <div class="row justify-content-center">
            <div class="m-3 p-3 col-6 card">
                <form action="../updateEvent/{{ $event['id'] }}" method="post" enctype="multipart/form-data">
                    @csrf 
                    <h2>Title</h2>
                    <input class="form-control" required type="text" name="title" id="" value="{{ $event['title'] }}">
                    
                    <h2>Description</h2>
                    <input class="form-control" required type="text" name="desc" value="{{ $event['description'] }}" >
                    <h2>Instagram</h2>
                    <input class="form-control" required type="text" name="ig" value="{{ $event['instagram'] }}">
                    
                    <input class="mt-3 btn btn-primary" type="submit" value="Update">
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            
            <div class="m-3 p-3 col-6 card">
                <form action="../updateLogo/{{ $event['title'] }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <h2>Logo</h2>
                    <img class="w-100 p-5" src="{{ asset('storage/'.$event['logo'][0]) }}" style="width: 100px" alt="">
                    <input class="form-control" type="hidden" name="oldLogo" value="{{ $event['logo'][0] }}">
                    <input class="form-control" multiple required type="file" name="logo" id="">
                    
                    <input class="mt-3 btn btn-primary" type="submit" value="Update">
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="m-3 p-3 col-6 card">
                @if(count($event['image']) < 5)
                <form method="post" action="../uploadImage/{{ $event['title'] }}" enctype="multipart/form-data">
                    @csrf
                    <h2>Gambar</h2>
                    <input required multiple type="file" name="image[]">
                    <input class="mt-3 btn btn-primary"  type="submit" value="Update">
                </form>
                @endif  
                <h2 class="p-0 m-0">Delete Image</h2>
                <form class="form-check" action="../updateImage/{{ $event['title'] }}" method="post">
                    @csrf
                    
                    @foreach($event['image'] as $image)
                    <img class="w-100 p-3" src="{{ asset('storage/'.$image) }}" style="width: 100px" alt="">
                    <input class="form-check-input" type="checkbox" name="image[]" value="{{ $image }}" id="">
                    @endforeach
                    <input class="mt-3 btn btn-primary" type="submit" value="Delete">
                </form>
            </div>
        </div>
    </div>
    @endSection
    
</body>
</html>