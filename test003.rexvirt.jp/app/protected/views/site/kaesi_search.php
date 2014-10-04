<!DOCTYPE>
<html>
 <head>
 <title>返す本を検索</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width,initial-scale=1.0" />
 <link rel="stylesheet" href="pub_search.css" type="text/css">
 <script type="text/javascript">
  function match_values(){
   /* open db */
   
   /* obtenir des valeurs et les mettre dans var buffer*/
 
   /* while,if matches, handle action page. if not, display red texte on "errN" tag  */
  }

 </script>
 </head>
 <body>
  <div id="iti">
   <div id="yon">
   返す本を検索
   </div>
  <div id="kensaku">

   
   <div id="san">
  検索項目
   </div>
　  <form  action="kaesi_kekka.php" method="POST">
     図書ID：<input type="text" name="bookid"/><div id="err1"></div></br>
    <!-- タイトル：<input type="text" name="title"/></br>
     ISBN：<input type="text" name="isbn"/></br>
     分類:<input type="text" name="genre" /></br>
     著者名:<input type="text" name="author" /></br>-->
     <input type="submit" value="検索" onclick="match_values()"/>
     <input type="reset" value="クリア"/>
     <a href="main.php"><input type="button" value="戻る" /></a>
     <a href="logout.php"><input type="button" value="ログアウト" /></a>

    </form>
   </div>

　</div>
 </body>
</html>
