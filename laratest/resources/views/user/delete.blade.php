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
            <td> </td>
            <td><input type="hidden" value="{{$user['id']}}"></td>
        </tr>
        <input type="submit" name="submit" value="Yes">
        <a href="/home"> cancel</a>
    </form>

</body>



</html>
