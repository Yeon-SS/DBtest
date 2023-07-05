<? 
	session_start(); 
?>
<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>html5문서</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/base.css">
		<!--<link rel="stylesheet" href="css/member.css">-->
	   <link rel="stylesheet" href="css/common.css">
		<style>
		body,html {width:100%;height:100%;}
			body {background:url(image/back1.jpg) no-repeat center fixed;
background-size:cover;
}

#join_mem {width:230px;border:1px solid gray;height:100px; padding:10px 5px;
position:absolute;left:50%;top:50%;margin-left:-120px;margin-top:-60px;
/*background:rgba(255,255,255,0.1);*/ border-color:rgba(255,255,255,0.6);
background:transparent;
}



#join_mem  #join2 {
	margin-bottom:10px;

}

#join_mem #join2 li {
    width:100%;
	height:28px; 
	padding-left:8px;
	padding-top:6px;
color:#fff;
}
label.b1{ padding-right:7px;}

#a2 {padding-bottom:3px;}

#join_mem #form_join #join2 input {
    width:150px;
	height:18px;
	border:solid 1px #cccccc;
}


#join_mem #join2 input.hp {
    width:73%;
	height:18px;
	border:solid 1px #cccccc;
}

	
#write_button {text-align:center;}		
		
		
		
		p.center a {background:rgba(255,255,255,0.9);
  color: #000;  display:inline-block;
  font-weight: bold;
   width: 8em;
  padding: 6px 6px 6px 6px;
  margin-top: 10px;
  text-transform: uppercase;
  position:relative; top:6px;
  }
p.center a:hover{background-color: #000;  color:#fff;
  cursor: pointer;}
		</style>
		
		 
<script>
/*
 function search() {
  var frm = document.id_search;
  if (frm.name.value.length < 1) {
   alert("이름을 입력해주세요");
   return;
  }
  
  frm.method = "post";
  frm.action = "./id_search.php"; 
  frm.submit(); 
 }*/
 </script>
		</head>
	<body>

<div id="join_mem">

        <form  name="member_form" method="post" action="pw_search.php"> 
		
			
			<div id="join2">
			<ul>
			<li>  <p> <label for="pid" class="b1">ID</label><input type="text" id="pid" name="id" placeholder="아이디"></p></li>
			<li><label for="a2" class="b2">HP</label>
			<input type="tel" class="hp" name="hp" placeholder="연락처"> </li>
					</ul>
			</div>
					<div id="write_button"><input type="image" src="image/ok.png">
							
		</div>
			</form>
			</div>
  
  
</body>
</html>