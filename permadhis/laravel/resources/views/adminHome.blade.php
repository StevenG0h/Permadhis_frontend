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
            <div class="m-3 p-3 col-12 card">
                <h1>Events</h1>
                <table class="table">
                    <a class="btn btn-primary col-1" href="{{ route("add") }}">Add</a>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Desc</th>
                        <th>Instagram link</th>
                        <th>Instagram username</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($data as $event)
                    <tr>
                        <td>{{ $event['id'] }}</td>
                        <td>{{ $event['title'] }}</td>
                        <td>{{ $event['description'] }}</td>
                        <td>{{ $event['instagram_link'] }}</td>
                        <td>{{ $event['instagram_username'] }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route("update",$event['id']) }}">
                                Update
                            </a>
                        </td>
                        <td>
                            <form action="{{ route("delete",$event['id']) }}" method="post">
                                @csrf
                                <input onclick="return confirm('Anda yakin ingin menghapus event ini?')" class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
        
    @endSection
</body>
</html>