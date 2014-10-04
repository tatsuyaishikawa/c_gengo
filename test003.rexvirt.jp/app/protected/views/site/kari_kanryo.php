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

 $bd=mysql_connect("127.0.0.1","root","agreable2");
 mysql_select_db('tosho',$bd);
 
 /* kashidashiテーブルに格納するデータを６つ用意*/
 $rentalid=$_SESSION['rentalid'];
 $bookid=$_SESSION['bookid'];
 $title=$_SESSION['title'];
 $id=$_SESSION['id'];
 $rentaldate="ji";
 $limitdate="jiji";

 /* check if the book is already gone */
 $requ="select * from kashidashi";
 $resu=mysql_query($requ);

 while($row=mysql_fetch_array($resu)){
   if($row[1] == $bookid){
    echo "既に貸出中です。";
    $_SESSION['bookid']=0;
    $_SESSION['title']=NULL;
    include 'error.php';
    exit();
   }
 }

 /*もし$title'が空であればbookidからtitleを検索して追加する*/
 if(!(isset($title))){ 
   $requ="select * from books where '$bookid'";
   $resu=mysql_query($requ); 
   
   $row=mysql_fetch_array($resu);
   $title=$_SESSION['title']=$row[1]; 
   }
 /* get id to find matching kashidashi table*/
 $requ="insert into kashidashi (rental_id,book_id,title,id,kari_date,kae_date) values('$rentalid','$bookid','$title','$id','$rentaldate','$limitdate')";

 $resu=mysql_query($requ);
 
 
 /*貸出中でなければ登録する*/
 $requ="update books set status='貸' where book_id='$bookid'";
 mysql_query($requ);
 mysql_free_result($resu);
 mysql_close($bd);
 echo "貸出処理が完了しました。"; 
  ?>
   <form>
    <a href="kari_search.php"><input type="button" value="検索メニューに戻る" /></a>
    <a href="main.php"><input type="button" value="メインメニューに戻る" /></a>
   </form>
  </body>
 </html>
