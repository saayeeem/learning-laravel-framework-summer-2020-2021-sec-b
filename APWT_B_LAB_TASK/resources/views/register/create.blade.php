<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Page</title>
</head>

<body>

    <a href="/home"> Back</a> |
    <a href="/login"> LogIn </a>

    <h2>Sign Up</h2>

    <form method="post" enctype="multipart/form-data">
        @csrf
        <table>

            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Full name</td>
                <td><input type="text" name="fullname"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="cpassword"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Company Name</td>
                <td><input type="text" name="company"></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="country"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Sign Up"></td>
                <td>
                </td>
            </tr>
        </table>
    </form>
    @foreach ($errors->all() as $err)
    {{$err}} <br>
    @endforeach
</body>



</html>