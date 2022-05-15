<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<a href="">Trang chủ</a>
<br>
<a href="signin.php">Đăng nhập </a>
<a href="signup.php">Đăng ký </a>
<a href="about_us.html">About us</a>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif}
* {box-sizing: border-box;}

.bg-img {
  /* The image used */
  background-image: url("bg.jpg");
  width: 100%;
  min-height: 600px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}

/* Position the navbar container inside the image */
.container {
  position: absolute;
  margin: 20px;
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
</style>
</head>
<body>

<h1>News page</h1>
<h2>Học viện công nghệ bưu chính viễn thông</h2>
<div class="bg-img">
  <div class="container">
    <div class="topnav">
		<a href="signin.php">Đăng nhập </a>
		<a href="signup.php">Đăng ký </a>
		<a href="about_us.html">About us</a>
    </div>
  </div>
</div>

</body>
</html>
