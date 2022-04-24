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
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>
            @foreach($data as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>
                    <form action="{{ route("deleteUser",$user['id']) }}" method="post">
                        @csrf
                        <button onclick="return confirm('yakin mau hapus?')" type="submit">hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @endSection
</body>
</html>