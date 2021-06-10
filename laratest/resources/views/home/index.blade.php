<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <a href="/home"> Home</a> |
    <a href="/logout"> Logout </a>
    {{session('msg')}}
    <h1>Welcome home, {{session('uname')}}</h1>
    <a href="/user/create"> Create New </a> |
    <a href="/user/list"> User List </a> |
    <a href="/logout"> Logout </a>
</body>

</html>
