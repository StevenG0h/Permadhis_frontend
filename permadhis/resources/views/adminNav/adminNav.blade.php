<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route("adminHome") }}">Dashboard</a>

    <a href="{{ route("showUser") }}">User</a>
    <form action="/logout" method="post">
        @csrf
        <button type="submit" onclick="return confirm('yakin mau logout?')" value="logout"> logout </button>
    </form>
    <a href="{{ route("updateUser") }}">update</a>
    @yield('admin')
</body>
</html>