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
        <div class="row justify-content-center">
            <h1 class="mt-3 text-center">Add Event </h1>
            <div class="m-3 p-3 col-6 card">
                <form class="" action="addProcess" enctype="multipart/form-data" method="post">
                    @error($errors->all())
                        <p>{{ $errors->message }}</p>
                    @enderror
                    @csrf
                    <h3>Title</h3>
                    <input class="form-control" required type="text" name="title" id="">
                    <h3>Logo</h3>
                    <input class="form-control" required type="file" name="logo" id="">
                    <h3>Description</h3>
                    <textarea class="form-control" required type="text" name="desc" id=""></textarea>
                    <h3>Instagram link</h2>
                    <input class="form-control" required type="text" name="ig">
                    <h3>Instagram username</h2>
                    <input class="form-control" required type="text" name="ig_username">
                    <h3>Gambar</h3>
                    <input class="form-control" required multiple type="file" name="image[]">
                    <input onclick="return confirm('Yakin ingin menyimpan?')" class="mt-3 btn btn-primary" type="submit" value="Save">
                </form>
            </div>
        </div>
    </div>

    @endSection
</body>

</html>
