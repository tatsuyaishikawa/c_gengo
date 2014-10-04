<html>
 <body>
<?php
	$ide=$_POST['shinki_ident'];
	$pass=$_POST['shinki_pass'];
	$nomdetable="yuza";
   $bd=mysql_connect("127.0.0.1","root","agreable2");
   mysql_select_db('tosho',$bd);

   $requ="insert into $nomdetable(id,pass) values('$ide','$pass')";
   $resu=mysql_query($requ);

        /*if($row[0]==$_POST['ident'] && $row[1]==$_POST['pass'])*/

	/*echo "<p>".$row[0]." ".$row[1]."</p>";*/
        /* allow to login to page */
	
	/* database  pre register processu */
	mysql_close($bd);
	header('Location: kanryo.php');
   /* login procedure */
   /* rediriger vers une autre page erreur error.php*/
   include("error.php");
   mysql_free_result($resu);
   mysql_close($bd);
  ?>
 </body>
</html>
