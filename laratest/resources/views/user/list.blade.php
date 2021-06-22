<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>

<body>
    <a href="/home"> Back</a> |
    <a href="/logout"> Logout </a>
    <h3>User List</h3>

    <table border="1">
        <tr>
            <td> ID </td>
            <td> Name </td>
            <td> Email </td>
            <td> Action </td>
        </tr>

        @foreach ($userList as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>
                <a href="{{route('user.details', ['id' => $user['id']])}}"> Details </a> |
                <a href="{{route('user.edit', ['id' => $user['id']])}}"> Edit </a> |
                <a href="{{route('user.delete', ['id' => $user['id']])}}"> Delete </a> |
            </td>
        </tr>
        @endforeach

    </table>
</body>

</html>
