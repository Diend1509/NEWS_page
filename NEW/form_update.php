<?php
session_start();
if(empty($_SESSION['level'])){
    header('location:index.php');
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
	a {
	  color: #04AA6D;
	  padding: 12px 20px;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	  float: right;
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

<?php
$ma=$_GET['ma'];
include 'connect.php';
$sql="select * from tin_tuc where ma=$ma";
$ket_qua = mysqli_query($ket_noi,$sql);
$tin_tuc = mysqli_fetch_array($ket_qua);
?>	
	<!-- <form method="POST" action="process_update.php">
		<input type="hidden" name="ma" value="<?php echo $ma ?>">

		Tiêu đề
		<input type="text" name="tieu_de" value="<?php echo $tin_tuc['tieu_de'] ?>">
		<br>

		Nội dung
		<textarea name="noi_dung" >
			<?php echo $tin_tuc['noi_dung'] ?>
		</textarea>
		<br>

		Link ảnh
		<input type="text" name="anh" value="<?php echo $tin_tuc['anh'] ?>">
		<br>
		<button>Sửa</button>
	</form> -->

<div class="container">
	  <form method="POST" action="process_php.php">
	  	<input type="hidden" name="ma" value="<?php echo $ma ?>">
	    <div class="row">
	      <div class="col-25">
	        <label for="tieu_de">Tiêu đề</label>
	      </div>
	      <div class="col-75">
	        <input type="text" id="tieu_de" name="tieu_de" value="<?php echo $tin_tuc['tieu_de'] ?>">
	      </div>
	    </div>
	    
	    <div class="row">
	      <div class="col-25">
	        <label for="noi_dung">Nội dung</label>
	      </div>
	      <div class="col-75">
	        <textarea id="noi_dung" name="noi_dung" placeholder="Write something.." style="height:200px">
	        	<?php echo $tin_tuc['noi_dung'] ?>
	        </textarea>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-25">
	        <label for="noi_dung">Ảnh cũ</label>
	      </div>
	      <div class="col-75">
	        <img src="<?php echo $tin_tuc['anh'] ?>">
	      </div>
	    </div>

		
	    <div class="row">
	    	

	    	<div class="col-25">
	    		<label for="img">Ảnh mới:</label>
	      	</div>
	    	<div class="col-75">
	    		<input type="text" name="anh" placeholder="link ảnh..." value="<?php echo $tin_tuc['anh'] ?>">
	      	</div>
	    	
		  	
	    </div>
	    <div class="row">
	    	<div class="col-25"></div>
	    	<div class="col-75">
	    		<input type="submit" value="Sửa">
	      		<a href="index.php">Cancel</a>
	      	</div>
	      
	    </div>

	  </form>
</div>


</body>


</html>