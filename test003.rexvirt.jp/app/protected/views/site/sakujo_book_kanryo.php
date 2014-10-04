<!DOCTYPE>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
 </head>
 <body>
<?php
   $bookid=$_POST['book_id'];
   $name=$_POST['title'];
   $isbn=$_POST['category']; 
   $categori=$_POST['author']; 
   $status="null";

   $bd=mysql_connect("127.0.0.1","root","agreable2");
   mysql_select_db('tosho',$bd);

   /*本が存在するか検索*/
   $requ='select *  from books';
   $resu=mysql_query($requ);

   while($row=mysql_fetch_array($resu)){
        if($row[0]==$bookid){
	 $requ="delete from books where book_id='$bookid'";
	 mysql_query($requ);
	 mysql_close($bd);
 	 echo "削除しました";
	}
       }
  ?>
 <form>
  <a href="sakujo_book.php"><input type="button" value="削除する書籍の登録に戻る"/></a>
  <a href="main_admin.php"><input type="button" value="メインメニューに戻る"/></a>
 </form>
 </body>
</html>
