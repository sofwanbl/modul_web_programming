<!DOCTYPE html>
<html>
  <head>
     <title>Form Mahasiswa</title>
     <script>
	   function cek()
	    {	 
          var nim=myform.vnim.value;
          if (nim.length==0)
             {
			   alert ("NIM tidak boleh kosong");			   
			   return false;
			 }  	 
        }  
     </script>
  </head>
  <body>
	 <form name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onSubmit="return cek()" > 
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
</html>
