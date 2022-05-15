<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif}
* {box-sizing: border-box;}

body, html {
  height: 100%;
  margin: 0;
}
.bg-img {
  /* The image used */
  background-image: url("bg.jpg");
  
  height: 70%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;

  color: white;
}

/* Position the navbar container inside the image */
.container {
  position: absolute;
  margin: 0px;
  left: 950px;
  top: 10px;
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
.a {
  padding: 14px 16px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #333;
  border: none;
  /*border-radius: 15px;*/
  box-shadow: 0 9px #999;
}
.a:hover {background-color: #ddd}

.a:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>


<div class="bg-img">
  <h1>News page</h1>
  <h2>Học viện công nghệ bưu chính viễn thông</h2>
  <div class="container">
    <div class="topnav">
  		<a href="signin.php">Đăng nhập </a>
  		<a href="signup.php">Đăng ký </a>
  		<a href="about_us.php" ">About us</a>
    </div>
  </div>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>
