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
   新規書籍登録
   </div>
  <div id="kensaku">
   <img id="gazou" src="" >
   <div id="san">
   各項目にデータを入力
   </div>
    <form action="shinki_book_kanryo.php" method="POST">
     書籍ＩＤ<input type="text" name="book_id" /><br/>
     <!--名前<input type="text" name="shinki_name" /><br/>-->
     書籍名<input type="text" name="title" /><br/>
     分類<input type="text" name="category" /><br/>
     著者<input type="text" name="author" /><br/>
     <input type="submit" value="登録"/>
     <input type="reset" value="消去" />
     <a href="main_admin.php"><input type="button" value="戻る" /></a>
     <a href="logout.php"><input type="button" value="ログアウト" /></a>
    </form>
  </div>
  </div>
 </body>
</html>


