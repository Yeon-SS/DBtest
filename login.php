<?
  session_start();
?>

<meta charset = "utf-8">

<?
  $id = $_POST['id'];
  if(!$id){
    // ! : 부정($id값이 존재하지 않는다면)
    echo("
      <script>
      window.alert('아이디를 입력하세요.')
      history.go(-1)
      // 이전 페이지로 이동
      </script>
    ");
    exit;
  }
  include "dbconn.php";
  mysqli_query($connect, 'set names utf8');
  // ㄴ> 한글 깨지는걸 막는 작업
  $sql = "select * from login_mem where id = '$id'";
  $result = mysqli_query($connect, $sql);
  $num_match = mysqli_num_rows($result);
  if(!$num_match){
    echo("
      <script>
        window.alert('등록되지 않은 아이디입니다.')
        history.go(-1)
      </script>
    ");
  } else{
    $row = mysqli_fetch_array($result);
    $pass = $_POST['pass'];

/*
mysql 테이블에 저장되어 있는 값을 query를 통해 불러온 후 그 값을
바로 사용할 수 없다 => 사용할 수 있는 형태로 바꿔줘야한다
==> mysql_fetch_array() 런 함수를 통해서
1. mysql_fetch_array() - 이 함수는 결과를 배열로 뽑아내는데,
 번호로 된 배열과 테이블 필드 이름으로 된 배열, 두 가지를 동시에 
 생성합니다.

*/
$db_pass = $row['pass'];
if($pass != $db_pass){
  echo("
  <script>
    window.alert('비밀번호가 틀립니다. 다시 입력해 주세요.')
    history.go(-1)
  </script>
");
exit;
} else{
  $userid = $row['id'];
  $username = $row['name'];

  $_SESSION['userid'] = $userid;
  $_SESSION['username'] = $username;

  echo("
    <script>
      location.href = 'index.html';
    </script>
  ");
}
}
?>