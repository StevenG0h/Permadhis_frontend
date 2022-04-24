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
        <h1>hello</h1>
        
        <table>
            <a href="{{ route("add") }}">Add</a>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Desc</th>
                <th>Instagram</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach($data as $event)
            <tr>
                <td>{{ $event['id'] }}</td>
                <td>{{ $event['title'] }}</td>
                <td>{{ $event['description'] }}</td>
                <td>{{ $event['instagram'] }}</td>
                <td>{{ $event['created_at'] }}</td>
                <td>{{ $event['updated_at'] }}</td>
                <td><a href="{{ route("update",$event['id']) }}">update</a></td>
                <td>
                    <a href="{{ route("delete",$event['id']) }}">
                        delete
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    @endSection
</body>
</html>