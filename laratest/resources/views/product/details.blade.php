<!DOCTYPE html>
<html>

<head>
    <title>Details Page</title>
</head>

<body>
    <h1>Details User</h1>
    <div>
        <p>
        <h2>ID:</h2> {{$user['id']}}</p>
        <p>
        <h2>Name: </h2>{{$user['name']}}
        </p>
        <p>
        <h2>Email: </h2>{{$user['email']}}
        </p>

    </div>
    <a href="/home">Home</a>
</body>



</html>
