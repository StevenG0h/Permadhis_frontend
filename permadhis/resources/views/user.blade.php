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
            <div class="m-3 p-3 col-6 card">
                <h1>User</h1>
                <a class="btn btn-success col-2" href="{{ route('registerForm') }}">Register</a>
                <table class="table">
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
                        <td class="col-1">
                            <form action="{{ route("deleteUser",$user['id']) }}" method="post">
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('yakin mau hapus?')"
                                    type="submit">Delete</button>
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
