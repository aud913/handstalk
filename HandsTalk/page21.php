<!DOCTYPE html>
<html lang="en">
<head>
  <title>page2</title>
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
.bodyf {
  padding: 50px;
  width: auto;

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
  background-color: #000;
  border-color: #000;
}

.btn-primary:hover {
  color: #fff;
  background-color: #bdbdbd;
  border-color: #bdbdbd;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #bdbdbd;
  border-color: #bdbdbd;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #bdbdbd;
  border-color: #bdbdbd;
}
.btnimg {
  border: 0px;
  margin: 0px;
}

.acolor {
  color:;
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

  </style>

</head>
<body>
<div class="center"><img src="./logo.png" width="80%" height="20%"></div>
<div class="container">
<nav id="header" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="./index.php">Home</a></li>
      <li><a href="./page1.php">팀소개</a></li>
      <li class="active"><a href="./page2.php">관련자료</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right ">
      <li ><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li ><a href="/handstalk/loginpage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>


<div class="center">
   <a style="color:#000; background-color:#bdbdbd; border-radius:10px;">Apps</a>/<a style="color:#000;" href="./page22.php">Books</a>
  </div>
<!--android랑 ios연결 되도록 버튼 두개 만들어서 마크 넣을것-->
<div class="container">
  <h5 style="text-align:center;"><button type="button" class="btn btn-primary" onclick="location.href='./page2.php'">BACK</button></h5>
</div>

<div  class="container"><hr>
<div class="well well-sm"><h2 class="white" float="left"> 수화번역도우미</h2></div><br>
<blockquote><h5><img src="/HandsTalk/img3.png" style="margin-left:10px;" class="img-rounded" width="350" height="300" align="right"/>- 텍스트 단어나 문장 입력을 통한 수화로 표현<br><br>
- 인터넷이나 다른 앱 사용 중 글자 영역 선택을 통한 "공유"를 통한 앱 실행 가능<br><br>
- 수화 캐릭터 변경 기능(Option menu를 통한 선택 가능)<br><br>
- 수화 캐릭터가 애니메이션되는 중간에 화면 터치를 통한 일시중지 및 다시 재생 기능<br><br>
- 3차원 아바타를 여러 방향으로 회전 기능 <br><br>
- 수화 동작의 속도 조절 기능 (느리게/빠르게) <br><br>
- 수화 단어의 의미에 대응하는 3D 아바타의 비수지신호 및 얼굴 표정 구현  </h5></blockquote>
<input  type="image" src="./ps.png" width="160px" height="60px" onclick="window.open('https://play.google.com/store/apps/details?id=com.sec.android.app.ksldic')">
</div>



<div  class="container"><hr>
<div class="well well-sm"><h2 class="white" float="left"> 열린수화</h2></div><br>
<blockquote><h5><img src="./img4.png" style="margin-left:10px;" class="img-rounded" width="350" height="300" align="right"/>
- 한국 수화 사전 제공<br><br>
- 검색 기능 제공<br><br>
- 테마별 보기<br><br>
- 지화 수화 보기<br><br>
- 수화통역센터 정보 제공<br><br>
- 배리어프리 영화 정보 제공</h5></blockquote>
<input  type="image" src="./ps.png" width="160px" height="60px" onclick="window.open('https://play.google.com/store/apps/details?id=com.sec.android.app.ksldic')">
</div>

<div  class="container"><hr>
<div class="well well-sm"><h2 class="white" float="left">사랑의 수화교실</h2></div><br>
<blockquote><h5 style='line-height:150%'><img src="/HandsTalk/app3.png" style="margin-left:10px;" class="img-rounded" width="350" height="300" align="right"/>
- 20개의 카테고리 종류 선택, 카테고리별 동영상 리스트 (총 4,000여개)를 볼 수 있으며 해당 동영상을 재생하여 볼 수 있습니다.
<br><br>
- 동영상 재생 시 해당 동영상 제목과 동영상에 대한 설명을 자막으로 볼 수 있습니다.
<br><br>
- 보고싶은 동영상을 키워드로 검색하여 찾을 수 있고, 해당 동영상을 재생하여 볼 수 있습니다.
동영상 재생 시 해당 동영상 제목과 동영상에 대한 설명을 자막으로 볼 수 있습니다.
</h5></blockquote>
<input  type="image" src="./ps.png" width="160px" height="60px" onclick="window.open('https://play.google.com/store/apps/details?id=com.sec.android.app.ksldic')">
</div>


<!--
<div  class="container"><hr>
<div class="well well-sm"><h2 class="white" float="left"> 제목영역</h2></div><br>
<blockquote><h5><img src="/HandsTalk/img4.png" style="margin-left:10px;" class="img-rounded" width="350" height="300" align="right"/>설명영역 </h5></blockquote>
<button type="button" class="btn btn-default onclick="window.open('URL')"">Download</button>
</div>
-->

<div style="position:fixed; bottom: 20px;  right:30px;">
<a href="#header"><img src="./top.png" width="70px" height="70px"></a>
</div>
</body>
</html>