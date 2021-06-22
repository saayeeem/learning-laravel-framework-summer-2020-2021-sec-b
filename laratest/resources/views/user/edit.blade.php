<!DOCTYPE html>
<html>

<head>
    <title>Edit Page</title>
</head>

<body>

    <a href="/home"> Back</a> |
    <a href="/logout"> Logout </a>

    <h2>Edit User</h2>

    <form method="post">
        @csrf
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="{{$user['username']}}"></td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="name" value="{{$user['name']}}"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="{{$user['email']}}"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Save"></td>
            </tr>
        </table>
    </form>
</body>

</html>
