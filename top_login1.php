
	<p>
  
	  
	  <?
    if(!$_SESSION['userid'] )
	{
?>
          <a href="login_form.php">Login</a> 
<?
	}
	else
	{
?>
		<a href="logout.php">Logout</a> 
<?
	}
?>
    </p> 
  
