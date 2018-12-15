<!DOCTYPE html>
<html>
<head>
  <title>Form Login</title>
</head>
<body>
  <table align="center">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <caption>Login</caption>
	 <tr>
	   <td>Username</td><td>:</td><td><input type="text" name="vusername" size="15" /></td>
	 </tr>	
	 <tr>
	   <td>Password</td><td>:</td><td><input type="password" name="vpassword" size="15" /></td>
	 </tr>	
	 <tr>
	   <td colspan="3"><input type="submit" value="Proses" /> <input type="button" value="Batal" /></td>
	 </tr>
	</form>	
  </table>
  <?php
    $dsn='mysql:host=localhost;dbname=test';
    $username='root';
    $password='opansan';
    
    try {
		  $dbh=new PDO($dsn,$username,$password);
		}
	 catch (PDOException $e)
	    {
		   echo $e->getMEssage();
		}   	  	   
		
    if (isset($_POST["vusername"]))
       {
		 $xusername=$_POST["vusername"];
	   }
	else
	   {
		 $xusername="";
	   }	      
	   
	if (isset($_POST["vpassword"]))
	   {
		  $xpassword=$_POST["vpassword"];
		  $zpassword=md5($xpassword);
	   }
	else
	   {
		  $xpassword="";
		  $zpassword="";
	   }
	 
	 $querynya="select count(*) from user where username='$xusername' and password='$zpassword'";
	 $jumlah=$dbh->query($querynya)->fetchColumn();
	 echo "<br/>";
	 
	 if ($jumlah>0)
	   { 
		  echo "<center>Lanjut</center>";
	   }
	 else
	   {
		 echo "<center>Gagal</center>";
	   }	      	   
   ?>	   
</body>
</html>
