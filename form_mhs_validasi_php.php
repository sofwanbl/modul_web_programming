<!DOCTYPE html>
<html>
  <head>
     <title>Form Mahasiswa</title>     
  </head>
  <body>
	 <form name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
     <table>
	   <caption>Form Mahasiswa</caption>	 
       <tr>
          <td>NIM</td><td>:</td><td><input type="text" name="vnim" size="20" /></td>
       </tr>
       <tr>
          <td>Nama</td><td>:</td><td><input type="text" name="vnama" size="20" /></td>
       </tr>
       <tr>
          <td>Alamat</td><td>:</td><td><textarea rows="3" cols="40" name="valamat"></textarea></td>
       </tr>
       <tr>
         <td colspan="3"><input type="submit" value="Proses" /><input type="button" value="Cancel" /></td>
       </tr>
     </table>
     </form>     
  </body>
  <?php
    if (isset ($_POST["vnim"]))
       {
		  $xnim=$_POST["vnim"];
		  if (strlen($xnim)==0)
		    {
			  echo "NIM tidak boleh kosong";
			}
		  else
		    { 	  	
			  echo "Proses Lanjut";	
			  if (isset ($_POST["vnama"]))
                {
		          $xnama=$_POST["vnama"];
	            }
	
	         if (isset ($_POST["valamat"]))
               {
		         $xalamat=$_POST["valamat"];
	           }      
	        }
	     }   
  ?>
</html>
