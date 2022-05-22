<?php
session_start();
if(empty($_SESSION['level'])){
    header('location:index.php');
    alert("admin mới được làm thế!!") ;
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
				* {
	  box-sizing: border-box;
	}

	input[type=text], select, textarea {
	  width: 100%;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  resize: vertical;
	}

	label {
	  padding: 12px 12px 12px 0;
	  display: inline-block;
	}

	input[type=submit] {
	  background-color: #04AA6D;
	  color: white;
	  padding: 12px 20px;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	  float: right;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}

	.container {
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 20px;
	}

	.col-25 {
	  float: left;
	  width: 25%;
	  margin-top: 6px;
	}

	.col-75 {
	  float: left;
	  width: 75%;
	  margin-top: 6px;
	}

	/* Clear floats after the columns */
	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}

	/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) {
	  .col-25, .col-75, input[type=submit] {
	    width: 100%;
	    margin-top: 0;
	  }
	}
	</style>

</head>
<body>

<div class="container">
	  <form method="POST" action="process_php.php">
	    <div class="row">
	      <div class="col-25">
	        <label for="tieu_de">Tiêu đề</label>
	      </div>
	      <div class="col-75">
	        <input type="text" id="tieu_de" name="tieu_de" placeholder="Tiêu đề..">
	      </div>
	    </div>
	    
	    <div class="row">
	      <div class="col-25">
	        <label for="noi_dung">Nội dung</label>
	      </div>
	      <div class="col-75">
	        <textarea id="noi_dung" name="noi_dung" placeholder="Write something.." style="height:200px"></textarea>
	      </div>
	    </div>

	    <div class="row">
	    	<div class="col-25">
	    		<label for="img">Ảnh(chọn tệp hoặc link):</label>
	      	</div>
	    	<div class="col-75">
	    		<input type="file" id="img" name="anh" accept="image/*">
	    		<input type="text" name="anh" placeholder="link ảnh...">
	      	</div>
	    	
		  	
	    </div>
	    <div class="row">
	      <input type="submit" value="Submit">
	    </div>

	  </form>
</div>


</body>






	</html>