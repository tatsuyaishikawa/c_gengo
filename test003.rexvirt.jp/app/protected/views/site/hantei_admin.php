<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <body>
<?php
   $id=$_POST['ident'];
   $pass=$_POST['pass'];
   $rentalid=0;
   $i=0;
   $cou=0;
 
   $bd=mysql_connect("127.0.0.1","root","agreable2");
   mysql_select_db('tosho',$bd);

   $requ='select * from yuza';

   
   $resu=mysql_query($requ) or die();

   while($row=mysql_fetch_array($resu)){
        /*if($row[0]==$_POST['ident'] && $row[1]==$_POST['pass'])*/
        
        if($row[0]== $id &&  $row[1]==$pass){
	 $requ="select * from yuza"; 
	 $resu1=mysql_query($requ);

	 $requ2="select * from yuza where id='$id'";
	 $resu2=mysql_query($requ2);
	 $rowtro=mysql_fetch_array($resu2);
	 $admi=$rowtro[2];

	echo "jiji";
	 while($rowde=mysql_fetch_array($resu1)){
	/* check if admin user */
	echo "ad";
	 if($rowde[2]==$admi){
 	/* generate rentalid */
	 
	session_start();
	$_SESSION['id']=$id;
	$_SESSION['rentalid']=$rentalid;
	/*echo "<p>".$row[0]." ".$row[1]."</p>";*/
        /* allow to login to page */
	/* database  pre register processu */
 	mysql_close($bd);
	header('Location: main_admin.php');
	}
       }
      }
   }
   /* login procedure */ /* rediriger vers une autre page erreur error.php*/
   /*$ji=$row[0]; 
   echo $ji;*/
   mysql_free_result($resu);
   mysql_close($bd);
   echo "入力情報が正しくありません";
  ?>
 </body>
</html>
