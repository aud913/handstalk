<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./bootstrap.css" rel="stylesheet">
<style>
.navbar {
      padding-top: 0px;
      padding-bottom: 0px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
      background-color: #000;
      
  }

  .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
    color: #fff;
    background-color: #BDBDBD;
}


.center {
    margin: auto;
    width: 60%;
    text-align:center;
    font-size:50px;

    
}
.white {
  color:white;
}

.well {
  background-color: #2E2E2E;
}

.btn-primary {
  color: #fff;
  background-color: #BDBDBD;
  border-color: #BCA9F5;
}

.btn-primary:hover {
  color: #fff;
  background-color: #8000FF;
  border-color: #8000FF;
}

.btnimg {
  border: 0px;
  margin: 0px;
}

blockquote {
  
  page-break-inside: avoid;
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #000;
}
.btn btn-default {
  margin: 0;
  background-color: #000;
}

.bodyf {
  padding: 50px;
  width: 600px;
  
  margin: auto;
}
  </style>

</head>
<body>
<div class="center"><img src="./logo.png" width="80%" height="20%"></div>
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/handstalk/index.php">Home</a></li>
      <li><a href="/handstalk/page1.php">팀소개</a></li>
      <li><a href="/handstalk/page2.php">관련자료</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right ">
      <li ><a href="/handstalk/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li  class="active"><a href="/handstalk/loginpage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>




<div class="container">
<div class="bodyf">
  <h2 style="text-align:center;">로그인</h2>
  <form>
    <div class="form-group">
      <label for="email">ID</label>
      <input type="email" class="form-control" id="id" placeholder="Enter ID">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button  type="submit" class="btn btn-default">login</button>
  </form>
</div>
</div>
</body>
</html>