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

		#join_mem {
			margin-top: 20%;
			top: 50%;
			left: 50%;
			transform: translate(-50% -50%);
			text-align: center;
			padding: 50px 0;
		}

		#join_mem h2 {
			margin-bottom: 30px;
			color: rgba(42, 67, 207, 0.712);
		}

		#join2 ul li {
			line-height: 2;
			margin-left: -40px;
		}

		#join2 li input {
			outline: none;
			padding-top: 1.5px;
		}

		#la2 label {
			letter-spacing: 0.3rem;
		}

		#join3 {
			margin-top: 20px;
			background-color: antiquewhite;
			border: 1.5px outset rgba(245, 202, 179, 0.712);
			border-radius: 3px;
			cursor: pointer;
			padding: 3px 30px;
		}

	</style>

</head>

<body>

	<div id="join_mem">

        <form  name="member_form" method="post" action="id_search.php"> 

			<h2>아이디 찾기</h2>

		
			<div id="join2">
				<ul>
					<li><label for="a1">이름 </label> <input type="text" name="name" width="140px" placeholder="이름" id="a1"></li>
					<li id="la2"><label for="a2" class="b2">HP</label> 
					<input type="text" class="hp" name="hp" placeholder="연락처"></li>
				</ul>
			</div>

			<!-- <div id="write_button"><input type="image" src="img/ok.png"></div> -->
			<button  type="submit" id="join3">완료</button>
		</form>
		
	</div>
  
</body>
</html>