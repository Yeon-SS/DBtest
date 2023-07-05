<?
    session_start();
?>

<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>html5문서</title>

	<link rel="stylesheet" href="css/reset.css">
    
<style>
    li {
        list-style: none;
    }

    body {
        width: 80%;
        margin: 0 auto;
        margin-top: 30%;
        border: 2px solid red;
        font-size: 1rem;
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: rgba(42, 67, 207, 0.712);
    }

    #form_join {
        width: 100%;
        position: relative;
    }

    #join1 {
        width: 30%;
        line-height: 2;
        margin-left: 20px;
        margin-bottom: 20px;
        font-size: 0.95rem;
        background-color: rgba(255, 234, 222, 0.712);
        padding-left: 15px;
    }

    #join2 {
        width: 60%;
        height: 200px;
        right: 0;
        position: absolute;
        top: 30px;
        line-height: 1.9;
    }

    input {
        width: 90%;
    }

    #must {
        margin-left: 30px;
        font-size: 0.75rem;
    }

    #button {
       text-align: center;
    }

    button {
        background-color: antiquewhite;
        border: 1.5px outset rgba(245, 202, 179, 0.712);
        border-radius: 4px;
        margin: 30px 20px;
        padding: 3px 20px;
        font-weight: bold;

    }

    button:hover {
        background-color: black;
        color: aliceblue;
    }
</style>

<script>
   function check_id()
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
        "IDcheck",
        "left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
   }

   function check_input()
   {
      if (!document.member_form.pass.value)
      {
          alert("비밀번호를 입력하세요");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("비밀번호확인을 입력하세요");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("이름을 입력하세요");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.hp.value)
      {
          alert("휴대폰 번호를 입력하세요");    
          document.member_form.nick.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value)
      {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form()
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.hp.value = "";
      document.member_form.email.value = "";
	  
      document.member_form.id.focus();

      return;
   }
</script>

	</head>

	<body>
	<?
    include "dbconn.php";
    mysqli_query($connect,'set names utf8');  

  //  $sql = "select * from member where id='$userid'";
  // 아래문자 위의문장 수정한 내용
    $sql = "select * from login_mem where id='$_SESSION[userid]'";
    $result = mysqli_query($connect,$sql);

    $row = mysqli_fetch_array($result);

    mysqli_close($connect);
?>


  <div id="header">

    <? include "top_login2.php"; ?>

  </div>  

	<h2>회원정보수정</h2>
 	<div id="join_meme">
        <form  name="member_form" method="post" action="modify.php"> 

		<!--추가한곳-->
            <input type="hidden" name=id value=<?=$row['id']?>>
        <!--추가한곳 끝-->

			
		<div id="form_join">
			<div id="join1">
                <ul>
                    <li>* 아이디</li>
                    <li>* 비밀번호</li>
                    <li>* 비밀번호 확인</li>
                    <li>* 이름</li>
                    <li>* 휴대폰</li>
                    <li>* 이메일</li>
                </ul>
			</div>

			<div id="join2">
                <ul>
                    <li><?= $row['id'] ?></li>
                    <li><input type="password" name="pass" value="<?= $row['pass'] ?>"></li>
                    <li><input type="password" name="pass_confirm" value="<?= $row['pass'] ?>"></li>
                    <li><input type="text" name="name" value="<?= $row['name'] ?>"></li>
                    <li> <input type="tel" class="hp" name="hp" value="<?= $row['hp'] ?>"></li>
                    <li><input type="email" id="email1" name="email" value="<?= $row['email'] ?>"> </li>
                </ul>
			</div>

			<div class="clear"></div>
			<div id="must"> * 는 필수 입력항목입니다.^^</div>
		</div>

		<div id="button">
            <!-- <a href="#"><img src="img/button_save.gif"  onclick="check_input()"></a>&nbsp;&nbsp;
		    <a href="#"><img src="img/button_reset.gif" onclick="reset_form()"></a> -->

            <button type="submit" onclick="check_input()"> 저장하기 </button>&nbsp;&nbsp;
            <button type="reset" onclick="reset_form()"> 취소하기 </button>

            <!-- <input type="submit" onclick="check_input()" value="저장하기">
            <input type="reset" onclick="reset_form()" value="취소하기"> -->
        </div>

	    </form>
	</div>


  
  
</body>
</html>