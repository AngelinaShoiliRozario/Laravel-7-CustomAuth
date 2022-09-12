<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
       <style>
        *{
				padding: 0;
				margin: 0;
				box-sizing: border-box;
			}
        h1{
            text-align: center;
            margin-top:30px;
        }
        .l{
            background-color: crimson;
            padding:5px;
            color:white;
            text-decoration: none
        }
        .m{
            text-align:center;
        }
        .m a{
            padding:.2em;
            background-color:black;
            color:white;
            text-decoration: none;
        }
       </style>
    </head>
    <body >
        
        
        <h1>
            @if($data->admin==1)
            Welcome Admin {{$data->name}} 
            @else
            Welcome User {{$data->name}}
            @endif
        </h1>
         <h1><a class="l" href="{{url('admindashboard')}}">Admin Dashboard</a>
         <a class="l" href="{{url('userdashboard')}}">User Dashboard</a></h1>
      
         <h1 class="m"><a href="{{url('logout')}}">Logout</a></h1>
         
    </body>
</html>