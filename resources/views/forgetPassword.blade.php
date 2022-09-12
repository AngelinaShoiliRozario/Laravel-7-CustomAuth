<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forget password</title>
</head>
<body>
    <form action="{{url('forget-password-post')}}" method="POST" >
        {{ csrf_field() }}
        <label>Enter Your Email </label>
        <input type="text" name='email'>
        <label>New Password</label>
        <input type="text" name='password'>
        <label>Confirm Password</label>
        <input type="text" name='confirmpassword'>
        <button>Submit</button>
    </form>
</body>
</html>