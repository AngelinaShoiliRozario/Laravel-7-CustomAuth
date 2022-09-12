<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Form</title>
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
        .login{
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
    <body >
       
       <h3 >Login</h3>
        <p>{{Session::get('success')}}</p>
			<form action="{{url('post-login')}}" method="POST">
                {{ csrf_field() }}
                <div >
                    <label>Email</label>
                    <input name="email" type="email" placeholder="Enter email address" />
                    @if ($errors->has('email'))
                        <span >{{ $errors->first('email') }}</span>
                    @endif 
				</div>
                <div >
					<label>Password</label>
					<input   type="password" name="password" placeholder="Enter password" />
                   
                    
					@if ($errors->has('password'))
					    <span >{{ $errors->first('password') }}</span>
					@endif
				</div>
                                 
                <div >
					<input  id="rememberPasswordCheck" type="checkbox" name='remember'/>
					<label  for="rememberPasswordCheck">Remember password</label>
				</div>
                <div >
					<a  href="#">Forgot Password?</a>
					<button class="login"  type="submit">Login</button>
				</div>
                <div ><a href="{{url('register')}}">Need an account? Sign up!</a>
                </div>
            </form>
         
            
               
            
                              
    </body>
</html>