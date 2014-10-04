 <html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  </head>
  <body>
  <?php
  /* register the rest of data to complete kashidashi table */
   echo '完了しました';
 /*
 $rentaldate=date("j,n,Y");
 
 modosu($rentaldate);

 if(j+20>30){
  $ln=31-j;
  }
 $lY=Y;
 
 $limitdate="$lj,$ln,$lY";
 $bd=mysql_connect("127.0.0.1","root","agreable2");
 mysql_select_db('tosho',$bd);
*/
 /* get id to find matching kashidashi table*/
 $requ1="select * from books";
 $id=1;
 mysql_query($requ);

 /*
 $requ="update kashidashi (rentalid,bookid,id,title,kari_date,kae_date) set kari_date='$rentaldate',kae_date='$limitdate' where id='$id' ";
 $resu=mysql_query($requ);
 */
 mysql_free_result($resu);
 mysql_close($bd);
 
  ?>
   <form>
    <a href="login.php"><input type="button" value="戻る" /></a>
   </form>
  </body>
 </html>
