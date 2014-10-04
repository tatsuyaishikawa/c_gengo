<!DOCTYPE>
 <html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  </head>
  <body>
  <?php
 session_start();
  /* register the rest of data to complete kashidashi table */
   echo '返却が完了しました';
 /*
 $rentaldate=date("j,n,Y");
 
 modosu($rentaldate);

 if(j+20>30){
  $ln=31-j;
  }
 $lY=Y;
 */ 
 $bd=mysql_connect("127.0.0.1","root","agreable2");
 mysql_select_db('tosho',$bd);
 $rentaldate="ji";
 $limitdate="hi";
 $id=$_SESSION['id']; 
 $bookid=$_SESSION['bookid']; 
 /* get id to find matching kashidashi table*/

 $requ="delete from kashidashi where id='$id' and book_id='$bookid'";
 $resu=mysql_query($requ);
 
 
 /* change book state */
 $requ="update books set status='null' where book_id='$bookid'";
 mysql_query($requ);
 mysql_free_result($resu);
 mysql_close($bd);
  ?>
   <form>
    <a href="kaesi_search.php"><input type="button" value="検索メニューに戻る" /></a>
    <a href="main.php"><input type="button" value="メインメニューに戻る" /></a>
   </form>
  </body>
 </html>
