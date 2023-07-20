<?
  session_start();
  unset($_SESSION['userid']);
  unset($_SESSION['username']);
  unset($_SESSION['usernick']);
 
  echo("
        <script>
          window.alert('로그아웃 되었습니다.')
          history.go(-1);
        </script>
       ");
?>