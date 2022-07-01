<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <h1>Welcome</h1>
    <a href="{{route('register.create')}}"> Sign Up</a>
    <h1>Login</h1>

    <form method="post">
        <table>
            <!-- @csrf -->
            <!-- {{csrf_field()}} -->
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{old('email')}}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="{{old('password')}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="submit"></td>
            </tr>
        </table>
    </form>

    {{session('msg')}}
    <br>

    @foreach ($errors->all() as $err)
    {{$err}} <br>
    @endforeach
</body>

</html>