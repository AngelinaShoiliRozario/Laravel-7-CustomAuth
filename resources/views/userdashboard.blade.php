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
            body{
                position: relative;
            }
        h1{
            background-color: chartreuse;
            padding:10px;
            text-align: center;
           
        }
        a.right{

        }
        a.l{
            position: absolute;
            top:10px;
            right:20px;
            background-color: crimson;
            padding:5px;
            color:white;
            text-decoration: none
        }
       </style>
    </head>
    <body >
        <h1>Dashboard For User</h1>  
         <a class="l" href="{{url('logout')}}">Logout</a>
    </body>
</html>