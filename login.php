<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
      <style type="text/css">
      #text{

      	height: 25px;
      	border-radius: 5px;
      	padding: 4px;
      	border:  solid thin #aaa;
      	width: 100%;
      }
      	
      	#button {

      		padding: 10px;
      		wide: 100px;
      		color: white;
      		background-color: darkblue;
      		border: none;
      	}
      	#box{

      		background-color: greenyellow;
      		margin: auto;
      		width: 500px;
      		padding: 20px;
      	}
      

      </style>
   
     <div id="box">
     	<form method="post">
     		<div style="font-size: 20px;margin: 10px;color: darkblue;"><u><b>Login</b></u></div>
     		<label for="user_name">User Name:</label>
     	<input id="text" type="text" name="user_name"><br><br>
     	<label for ="password">Password:</label>
     	<input id="text"type="password" name="password"><br><br>

     	<input type="button" onclick="location.href='file:///C:/xampp/htdocs/projecttest/index.php';" value="Login" /><br><br>

     	<a href="signup.php">Click to Signup</a><br><br>

     		
               

     	</form>

     	   

     </div>

</body>
</html>