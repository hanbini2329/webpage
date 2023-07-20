<? 
	session_start(); 
?>
<meta charset="utf-8">
<?
//넘어온 id값
$id=$_POST['id'];
if(!$id)/* !존재하지 않으면 */{
    echo ("
    <script>
    window.alert('아이디를 입력하세요.')
    history.go(-1); // history.go(-1):이전페이지로
    </script>
    ");
    exit;
}

$pwd1=$_POST['pwd1'];  
if(!$pwd1) {
  echo("
        <script>
          window.alert('비밀번호를 입력하세요.')
          history.go(-1)
        </script>
      ");
      exit;
}

//접속해라
include "dbconn.php";
mysqli_query($connect,'set names utf8'); //한글깨지지 않게

$sql = "select * from join_page where id = '$id'";
$result = mysqli_query($connect,$sql);

$num_match = mysqli_num_rows($result);
if(!$num_match)
{
    echo("
    <script>
    window.alert('등록되지 않은 아이디 입니다.')
    history.go(-1);
    </script>
    ");
}
else
{
    $row = mysqli_fetch_array($result);/* mysqli_query()함수를 통해 $result에 얻은 1개의 값 */
    $db_pwd1= $row['pwd1'];
    if($pwd1 != $db_pwd1)
    {
        echo ("
        <script>
        window.alert('비밀번호가 틀립니다.')
        history.go(-1);
        </script>
        ");
        exit;
    }
    else{
        $userid=$row['id'];
        $userpass=$row['pwd1'];

        /* SESSION 변수 */
        $_SESSION['userid'] = $userid;
        $_SESSION['userpwd1'] = $userpwd1;

        echo ("
        <script>
        window.alert('$userid 님 반갑습니다.')
        location.href ='index.html';
        </script>
        ");
    }
}

?>