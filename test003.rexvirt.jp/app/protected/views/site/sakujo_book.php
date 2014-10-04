<!DOCTYPE>
<html>
 <head>
 <title>新規ユーザ登録</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width,initial-scale=1.0" />
 <link rel="stylesheet" href="./pub_search.css" type="text/stylesheet" /> 
 </head>
 <body>
  <div id="iti">
   <div id="yon">
  　削除
   </div>
  <div id="kensaku">
   <img id="gazou" src="" >
   <div id="san">
   各項目にデータを入力
   </div>
    <form action="sakujo_book_kanryo.php" method="POST">
     書籍ＩＤ<input type="text" name="book_id" /><br/>
     <!--名前<input type="text" name="shinki_name" /><br/>-->
     書籍名<input type="text" name="book_name" /><br/>
     カテゴリ<input type="text" name="categori" /><br/>
     著者<input type="text" name="author" /><br/>
     <input type="submit" value="削除"/>
     <input type="reset" value="消去" />
    </form>
  </div>
  </div>
 </body>
</html>


