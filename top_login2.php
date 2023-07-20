
	<li>
  
	  
	  <?
    if(!$_SESSION['userid'] )
	{
?>
          <a href="login_form.php">로그인</a> 
	</li>
	<li><a href="member.html">회원가입</a>
<?
	}
	else
	{
?>
		<a href="logout.php">로그아웃</a> 
		</li>
	<li><a href="member_form_modify.php">회원정보수정</a>
<?
	}
?>
    </li> 
  
