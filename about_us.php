<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

a:hover{
  text-decoration: unset;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Nhóm 2</p>
  <p>Dưới đây là các thành viên trong nhóm</p>
  <a href="index.php" ><h1>Cancel</h1></a>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="kiritsugu.jpg" alt="Diend" style="height: 250px; width:350px">
      <div class="container">
        <h2>Trần Quang Điền</h2>
        <p class="title">Leader - Back-end</p>
        <p>Tổ chức nhóm, tạo dựng back-end,..</p>
        <p>diendtran42@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Nguyen.jpg" alt="Nguyen" style="height: 250px; width:250px; ">
      <div class="container">
        <h2>Nguyễn Văn Nguyên</h2>
        <p class="title">Front-end</p>
        <p>Làm front-end cho giao diện đăng nhập</p>
        <p>17052d@gmail.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Huyminh.jpg" alt="Minh" style="height: 250px;width:250px">
      <div class="container">
        <h2>Nguyễn Huy Minh</h2>
        <p class="title">Front-end</p>
        <p>Làm front-end cho giao diện bảng tin và 1 số các phần lặt vặt khác</p>
        <p>minh3caidau@gmail.com</p>
      </div>
    </div>
  </div>
</div>


</body>
</html>

