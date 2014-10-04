 <html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  </head>
  <body>
   <form>
    <?php
    session_start();
    $id=$_SESSION['id'];

    if($id==1){
    echo "<a href=\"main_admin.php\"><input type=\"button\" value=\"戻る\" /></a>";
    } else{ 
    echo "<a href=\"main.php\"><input type=\"button\" value=\"戻る\" /></a>";
    }
    ?>
   </form>
  </body>
 </html>
