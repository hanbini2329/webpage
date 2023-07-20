<?
   session_start();

   $num=$_GET['num'];



   include "dbconn.php";

   $sql = "delete from review where num = $num";
   mysqli_query( $connect,$sql);

   mysqli_close($connect);

   echo "
	   <script>
	    location.href = 'review_list.php';
	   </script>
	";
?>

