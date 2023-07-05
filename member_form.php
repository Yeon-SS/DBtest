<? 
	session_start(); 
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        /* border: 2px solid red; */
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
        /* padding-left: -35px; */
    }

    #join1 ul li{
        margin-left: -30px;
    }

    #join2 {
        width: 73%;
        height: 200px;
        right: 0;
        position: absolute;
        top: -20px;
        line-height: 1.9;
    }

    #id1 {
        position: relative;
    }

    #id2 {
        position: absolute;
        right: 20px;
        margin-top: -30px;
    }

    #hp1 {
        position: relative;
    }

    #hp2 {
        position: absolute;
        right: 20px;
        margin-top: -30px;
    }

    input {
        width: 90%;
    }

    #must {
        margin-left: 30px;
        font-size: 0.75rem;
    }

    .mem2 {
        width: 50%;
    }

    #bu2 {
        background-color: antiquewhite;
        border: 1.5px outset rgba(245, 202, 179, 0.712);
        border-radius: 4px;
        padding: 2px 20px;
        font-weight: bold;
    }

    #bu3 {
        background-color: antiquewhite;
        border: 1.5px outset rgba(245, 202, 179, 0.712);
        border-radius: 4px;
        padding: 2px 20px;
        font-weight: bold;
    }

    #button {
       text-align: center;
    }

    .bu3 {
        background-color: antiquewhite;
        border: 1.5px outset rgba(245, 202, 179, 0.712);
        border-radius: 4px;
        margin: 30px 20px;
        padding: 3px 20px;
        font-weight: bold;
    }

    .bu3:hover {
        background-color: black;
        color: aliceblue;
    }

</style>

		
	<script>

   function check_id()
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
        "IDcheck",
        "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }


function check_input(){
   // const re1 = /^[a-zA-Z0-9]{4,12}$/ ;  //가능하다
   const re1 =/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,15}$/;
    const id=document.member_form.id.value;
      if (!document.member_form.id.value)
      {
          alert("아이디를 입력하세요");    
          document.member_form.id.focus();
          return;
      }else if(!re1.test(id)){
        alert("아이디는 6~15자의 영문자,숫자,특수문자를(!@#$%^*+=-)를 혼합하여야 합니다.");
    return false;
      }


    //   const pass1 =/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,20}$/;
    //     const pass=document.member_form.pass.value;
      if (!document.member_form.pass.value)
      {
          alert("비밀번호를 입력하세요");    
          document.member_form.pass.focus();
          return;
    //   } else if(!pass1.test(pass)){
    //     alert("비밀번호는 6~20자의 영문자,숫자,특수문자를(!@#$%^*+=-) 혼합하여야 합니다.");
    //     return;
      } 

      if (!document.member_form.pass_confirm.value)
      {
          alert("비밀번호 확인을 입력하세요");    
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
          document.member_form.hp.focus();
          return;
      }


      if (!document.member_form.email.value)
      {
          alert("Email을 입력하세요");    
          document.member_form.email.focus();
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



      //휴대전화번호 체크
const hp1=document.member_form.hp.value;
const re2= /^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;
if (!re2.test(hp1)) {
          alert('휴대전화번호를 다시 입력해주세요.'); 
          return false;
      }



// 이메일 체크
const email=document.member_form.email.value;
//const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 //위의 식도 가능하다
const re=/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;
if (!re.test(email)) {
    alert("@를 포함해서 입력해주세요");
    return false;
        
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

		<h2>회원가입</h2>
		<div id="join_mem">

        <form  name="member_form" method="post" action="insert.php"> 
	
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
                    <li><div id="id1"><input type="text" name="id" class="mem2"></div>
                    <div id="id2"><a href="#">
                        <button type="button" id="bu2" onclick="check_id()">중복확인</button>
                    </a></div></li>

                    <li><input type="password" name="pass"></li>
                    <li><input type="password" name="pass_confirm"></li>
                    <li><input type="text" name="name"></li>
                    <li><input type="tel" name="hp"></li> 
                    <li><input type="email" id="email1" name="email"></li>
                </ul>
			</div>
			<div class="clear"></div>

			<div id="must"> * 는 필수 입력항목입니다.^^</div>
		</div>

		<div id="button">
            <!-- <a href="#"><img src="image/button_save.gif"  onclick="check_input()"></a>&nbsp;&nbsp;
		    <a href="#"><img src="image/button_reset.gif" onclick="reset_form()"></a> -->

            <button class="bu3" type="submit" onclick="check_input()"> 회원가입 </button>&nbsp;&nbsp;
            <button class="bu3" type="reset" onclick="reset_form()"> 취소하기 </button>

            <!-- <input type="button" onclick="check_input()" value="회원가입" class="bu3">
            <input type="reset" onclick="reset_form()" value="취소하기" class="bu3"> -->
		</div>
	    </form>
	</div>

		
		</body>
		</html>