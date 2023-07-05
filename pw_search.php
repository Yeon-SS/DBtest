<?
           session_start();
?>
<meta charset="utf-8">
<?
 /*  $id=$_POST['id'];
   if(!$id) {
     echo("
           <script>
             window.alert('아이디를 입력하세요.')
             history.go(-1)
           </script>
         ");
         exit;
   }

    $pass=$_POST['pass'];  
   if(!$pass) {
     echo("
           <script>
             window.alert('비밀번호를 입력하세요.')
             history.go(-1)
           </script>
         ");
         exit;
   }*/

   include "dbconn.php";
   mysqli_query($connect,'set names utf8');  

 $id=$_POST['id'];
 $hp=$_POST['hp'];
  
    //$hp=  $_POST['hp']; 

 $sql ="select * from join_mem12 where id='$id'  AND hp='$hp'";

 $result = mysqli_query( $connect,$sql);
$num_match = mysqli_fetch_array($result);

if(!empty($num_match)){
  echo "<script>alert('회원님의 비밀번호는 $num_match[pass]입니다. 로그인해주세요*^^*'); location.href='login_form.php';</script>";
  //알람창을 띄워주고, 로그인화면으로 넘깁니다. 알람창을 사용하기 위해서는  <script>안에 있어야함
 }

 else{
  echo $hp."<script>alert('비밀번호 찾기 실패');</script>";
 }
   mysqli_close($connect);     

/*
        echo("
              <script>
                location.href = 'main.html';
              </script>
           ");*/
    //   }
  //}          

?>