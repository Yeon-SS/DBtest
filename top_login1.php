	<div id="top_login">
  
	  
	  <?
    if(!$_SESSION['userid'] )
	{
?>
          <a href="login_form.php">Login</a> | <a href="#">My Starbucks</a> |  <a href="#">Customer Service &amp; Ideas</a> | <a href="#">Find a Store</a>
<?
	}
	else
	{
?>
		<?=$_SESSION['userid']?> | 
		<a href="logout.php">Logout</a> | <a href="member_form_modify.php">정보수정</a> | <a href="member_delete.php">회원탈퇴</a> <br>
		<a href="#">My Starbucks</a> |  <li><a href="#">Customer Service &amp; Ideas</a> | <a href="#">Find a Store</a>
<?
	}
?>
	  
     </div>



