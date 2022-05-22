<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body {font-family: Arial, Helvetica, sans-serif;}
	form {border: 3px solid #f1f1f1;}

	input[type=email], input[type=password], input[type=text] {
	  width: 50%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  box-sizing: border-box;
	}

	button {
	  background-color: #04AA6D;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 50%;
	}

	button:hover {
	  opacity: 0.8;
	}

	.cancelbtn {
	  width: auto;
	  padding: 10px 18px;
	  background-color: #f44336;
	}

	.imgcontainer {
	  text-align: center;
	  margin: 24px 0 12px 0;
	}

	img.avatar {
	  width: 40%;
	  border-radius: 50%;
	}

	.container {
	  padding: 16px;
	}

	span.password {
	  float: right;
	  padding-top: 16px;
	}

	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
	  span.password {
	     display: block;
	     float: none;
	  }
	  .cancelbtn {
	     width: 100%;
	  }
	}
	
	a:hover {
	  background-color: violet;
	}
	</style>
</head>
<body>
	<?php 
	if ( isset($_GET['error']) ) {
	 	echo $_GET['error'];
	 }
	?>
	<h1><a href="index.php">Trang chủ</a></h1>
	<form action="process_signup.php" method="post">
	  	<div class="container">
	    <label for="email"><b>Name</b></label>
	    <br>
	    <input type="text" placeholder="Enter Email" name="email" required>
	    <br>
	    <label for="email"><b>Email</b></label>
	    <br>
	    <input type="email" placeholder="Enter Email" name="email" required>
	    <br>
	    <label for="psw"><b>Password</b></label>
	    <br>
	    <input type="password" placeholder="Enter Password" name="password" required>
	    <br>
	    <button type="submit">Sign up</button>
	    <br>
	</form>
</body>
</html>