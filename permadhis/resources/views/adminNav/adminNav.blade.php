<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/admin">Dashboard</a>
    <a href="/add">Add</a>
    <a href="/update">Update</a>
    <a href="/delete">Delete</a>
    <form action="/logout" method="post">
        @csrf
        <input type="submit" value="logout">
    </form>
    @yield('admin')
</body>
</html>