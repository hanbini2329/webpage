<?
   session_start();
?>
<meta charset="utf-8">
<?
$id=$_POST['id'];
$pwd1=$_POST['pwd1'];
$email = $_POST['email'];
$name=$_POST['name'];
$birth=$_POST['birth'];
$hp = $_POST['hp'];
$addr=$_POST['addr'];
$ip = $REMOTE_ADDR;         // 방문자의 IP 주소를 저장

include "dbconn.php";       
    mysqli_query($connect,'set names utf8');  

$sql = "select * from join_page where id='$id'";
$result = mysqli_query( $connect,$sql);
$exist_id = mysqli_num_rows($result);

if($exist_id) {
    echo("
        <script>
        window.alert('해당 아이디가 존재합니다.')
        </script>
     ");
     exit;
   }
   else
   {            // 레코드 삽입 명령을 $sql에 입력
	$sql = "insert into join_page(id, pwd1, email, name, birth, hp, addr) ";
	$sql .= "values('$id', '$pwd1', '$email', '$name', '$birth', '$hp', '$addr')";

	
	mysqli_query( $connect,$sql);  // $sql 에 저장된 명령 실행
   }

   mysqli_close($connect);            
   echo "
	   <script>
	    location.href = 'index.html';
	   </script>
	";
	
	
	?>