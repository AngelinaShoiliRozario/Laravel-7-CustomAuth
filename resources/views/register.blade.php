<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Form - onlinecode</title>
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
			.register{
				border:none;
				padding:.3em 1em;
				background-color: dodgerblue
			}
		   </style>
    </head>
    <body >
       
    <div ><h3 >Create Account</h3></div>
                                  
    <form action="{{url('post-register')}}" method="POST" id="regForm">
		{{ csrf_field() }}
        <div >
			<label >Full Name</label>
			<input type="text" name="name" placeholder="Enter Full Name" />
				@if ($errors->has('name'))
					<span >{{ $errors->first('name') }}</span>
				@endif  
		</div>
        <div >
		    <label>Email</label>
		    <input  type="email"  name="email" placeholder="Enter email address" />
			@if ($errors->has('email'))
				<span >{{ $errors->first('email') }}</span>
			@endif
		</div>
		<div >
			<label  >Password</label>
			<input type="password" name="password" placeholder="Enter password" />
			@if ($errors->has('password'))
				<span >{{ $errors->first('password') }}</span>
			@endif
	    </div>
		<div >
			<input  id="adminCheck" type="checkbox" name='admin'/>
			<label  for="adminCheck">Is Admin</label>
		</div>
				 
        <div >
			<button class="register" type="submit">Create Account</button>
		</div>
		<a href="{{url('login')}}">Have an account? Go to login</a>
    </form>
                                
                                   
   
            
       
    </body>
</html>