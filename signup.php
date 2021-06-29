<?php


session_start();
  include("connection.php");
  include("function.php");


  $user_data = check_login($con);
  

?>



<html>
<head>
	<meta charset="utf-8">
	<title>signup</title>
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
     		<div style="font-size: 20px;margin: 10px;color: darkblue;"><u><b>Sign up</b></u></div>



	<fieldset>
			<legend>Basic Information :</legend>
			<label for="fname">First Name<span style="color: red;">*</span>:</label>

			<input type="text" id="fname" name="fname" >
			<span style="color: red"><?php echo $fnameErr; ?></span><br>

		
			
			<label for="lname">Last Name<span style="color: red;">*</span> :</label>
			<input type="text" id="lname" name="lname" >
			<span style="color: red"><?php echo $lnameErr; ?></span>
			<br>


			<label for="gender">Gender<span style="color: red;">*</span>:</label>
			
			<br>
			<input type="radio" id="gender" name="gender">
			<label for="male">Male</label>
			<br>
			<input type="radio" id="gender" name="gender">
			<label for="female">Female</label>
			<br>
			<input type="radio" id="gender" name="gender">
			<label for="other"> other</label>
			<span style="color: red"><?php echo $genderErr; ?></span>
			<br>
			<label for="DoB">DoB<span style="color: red;">*</span>:</label>
			<input type="date" id="DoB" name="DoB">
			<span style="color: red"><?php echo $DoBErr; ?></span>
			<br>
			<label for="religion">Religion<span style="color: red;">*</span>:: </label>
			<span style="color: red"><?php echo $religionErr; ?></span>
			<select id="religion" name="religion"> 
			
			
			<option value="muslim">Muslim</option>
			<option value="christan">Christian</option>
			<option value="hindu">Hindu</option>
		</select>
	</fieldset>


 <fieldset>
			<legend>Contact Information :</legend>
			<label for="comment">Present Address</label>
			<textarea id="comment" name="comment" rows="5" cols="20" value="<?php echo $presentaddress;?>"></textarea>
			<br> 
			<label for="comment1">Permanent  Address</label>
			<textarea id="comment1" name="comment1" rows="5" cols="20" value="<?php echo $permanentaddress;?>"></textarea>
			<br>
			<label for="phone">Enter your phone number:</label>
			<input type="tel" id="phone" name="phone">
			<br>
			<label for="email">Email<span style="color: red;">*</span>: </label>
			<input type="email" id="email" name="email" >
			<span style="color: red"><?php echo $emailErr;?></span>
			<br>
			<a href="https://github.com" target="_blank">Personal Website</a>
		</fieldset>
           

           <fieldset>
           	<legend>Choose your Department :</legend>

           	<label for="Department">Department:<span style="color: red;">*</span>:</label>
			<span style="color: red"><?php echo $religionErr; ?></span>
			<select id="Department" name="Department"> 
			
			
			<option value="FOSAT">Faculty of Science And Technology</option>
			<option value="FOE">Faculty of Engineering</option>
			<option value="FOBA">Faculty of Business Administation</option>
			<option value="FOASS">Faculty of Arts & Social Sciences</option><br><br>

               
               	
		</select><br><br>

             <label for="teacherid">Teacher ID:</label>

			<input type="teacherid" id="teacherid" name="teacherid" >


           </fieldset>

<br><br>


     	<input id="button" type="submit" value ="Signup"><br><br>

     	<a href="login.php">Click to Login</a><br><br>

     		
               

     	</form>

     	   

     </div>



<a href="login.php">Back to Login page </a><br><br>
</body>
</html>