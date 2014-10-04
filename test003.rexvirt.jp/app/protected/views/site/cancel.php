 <html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  </head>
  <body>
  <?php
   session_start();
   $_SESSION['bookid']=0;
   $_SESSION['title']=NULL;
   echo '取り消しました。';
  ?>
   <form>
    <a href="kari_search.php"><input type="button" value="戻る" /></a>
   </form>
  </body>
 </html>
