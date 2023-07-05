<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>html5문서</title>

		<link rel="stylesheet" href="css/reset.css">

		<style>

      a {
        text-decoration: none;
      }

      #login {
        width: 100%;
        height: 100%;
        left:50%;
        top:50%;
        transform: translate(-50% -50%);
        margin-top:50%; 
        text-align: center;
        /* border: 3px solid #000; */
      }

      #login h2{
        margin-bottom: 30px;
        color: rgba(42, 67, 207, 0.712);
      }

      .p1 {
        line-height: 2;
        margin-left: -10px;
      }

      #la1 {
        letter-spacing: 0.4rem;
        margin-right: 5px;
      }

      #la2 {
        letter-spacing: 0.1rem;
        margin-right: 5px;
      }

      input {
        outline: none;
      }

      .center {
        margin-top: 20px;
      }

      #login1 {
        padding: 4px 40px;
        margin-bottom: 30px;
        background-color:antiquewhite;
        border: 1.5px outset rgba(245, 202, 179, 0.712);
        font-weight: bold;
      }

      .login2 {
        font-size: 0.75rem;
        background-color: #fff;
        border: none;
        padding: 0 15px 0 13px;
        border-right: 1px solid #000;
      }

      .login2:nth-child(5) {
        border-right: none;
      }

      .login2 a {
        color: black;
      }

      .login2 a:hover {
        font-weight: bold;
      }


  
		</style>
		</head>

	<body>

    <div id="login">

      <h2>로그인</h2>

      <form name="member_form" method="post" action="login.php"> 

        <p class="p1"> <label id="la1" for="name">ID</label><input type="text" id="name" name="id"></p>
        <p class="p1"> <label id="la2" for="pwd">PW</label><input type="password" id="pwd" name="pass"></p>

        <p class="center"> 
          <!-- <input type="submit" value="로그인"> 
          <a href="member_form.php">회원가입</a> <br />
          <a href="id_screen.php" class="mm">아이디찾기</a>
          <a href="pw_screen.php" class="mm">비밀번호찾기</a> -->

          <button id="login1" type="submit">로그인</button> <br />
          <button class="login2"><a href="id_screen.php">아이디찾기</a></button>
          <button class="login2"><a href="pw_screen.php">비밀번호찾기</a></button>
          <button class="login2"><a href="member_form.php">회원가입</a></button> 


        </p>

      </form>

    </div>
  
  
</body>
</html>