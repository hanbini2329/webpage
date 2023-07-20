<?
    session_start();
?>
<meta charset="utf-8">
<?

/* 추가한곳 받아오는 방식 꼭 써주기*/
$userid=$_POST['id'];
$pass = $_POST['pwd1'];
$email = $_POST['email'];  
$name = $_POST['name'];
$bir = $_POST['birth'];
$hp = $_POST['hp'];
$addr = $_POST['addr'];

    
include "dbconn.php";      
mysqli_query($connect,'set names utf8');  

$sql = "update join_page set pwd1='$pass', name='$name' , ";
$sql .= " birth='$bir', hp='$hp', addr='$addr' where id='$_SESSION[userid]'";

$result = mysqli_query( $connect,$sql) ;

mysqli_close($connect);                
   echo "
	   <script>
	    location.href = 'index.html';
	   </script>
	";
?>