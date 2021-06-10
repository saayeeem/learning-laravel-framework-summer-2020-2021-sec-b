<!DOCTYPE html>
<html>

<head>
    <title>Delete Page</title>
</head>

<body>
    <h1>Delete User</h1>
    <h2>Are you sure want to Delete User {{$user['name']}}?</h2>
    <form method="post">
        <tr>
            <td><input type="hidden" value="{{$user['id']}}"></td>
            <td><input type="hidden" value="{{$user['name']}}"></td>
            <td><input type="hidden" value="{{$user['email']}}"></td>
        </tr>
        <input type="submit" name="submit" value="Yes">
        <a href="/home"> cancel</a>
    </form>

</body>



</html>
