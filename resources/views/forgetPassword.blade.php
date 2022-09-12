<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forget password</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        h3{
            background-color: lightblue;
            padding: 20px;
            text-align: center
        }
        form{
            width:250px;
            border:2px solid darkblue;
            
            padding:20px;
            display: flex;
            flex-direction: column;
            margin: 20px auto;
        }
        form div{
            padding:5px;
        }
        form input{
            padding:5px;
        }
        form span{
            color:red;
        }
        .btn{
            border:none;
            padding:.3em 1em;
            background-color: dodgerblue
        }
        p{
            color:red;
            text-align: center;
        }
       </style>
</head>
<body>
    <h3>Forget Password</h3>
    <form action="{{url('forget-password-post')}}" method="POST" >
        {{ csrf_field() }}
        <label>Enter Your Email </label>
        <input type="text" name='email'>
        <label>New Password</label>
        <input type="text" name='password'>
        <label>Confirm Password</label>
        <input type="text" name='confirmpassword'><br>
        <button class="btn">Submit</button>
    </form>
</body>
</html>