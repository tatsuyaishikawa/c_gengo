<!DOCTYPE>
<html>
 <head>
 <title>図書管理システム</title>
 <link type="text/css" rel=stylesheet" href="pub_search.css" />
 <meta http-equiv="Content-Type"  content="text/html; charset=UTF-8" /> 
 <meta name="viewport" content="width=device-width,initial-scale=1.0" />
 <script type="text/javascript" src="./kadai1.js"></script>
 <!-- ce procedure est effectue pour enregistrer l'info de livre -->
 </head>
 
 <body>
  <div id="iti">
   <div id="yon">
   検索結果一覧
   </div>
  </div>

<?php
 session_start();
 $cou=0; /*一回目のみ<table>をechoで表示する*/ 
 $gaito=0;/*一冊も街頭する書籍がない場合を判定する*/
 $db=mysql_connect("127.0.0.1","root","agreable2");
 mysql_select_db('tosho',$db);

 /* 本が存在するかを確認*/
 $requ='select * from books';
 $apre=mysql_query($requ);

 while($row=mysql_fetch_array($apre)){
   if($cou==0){
    echo "<table border=\"10\" color=\"black\">";
    echo "<tr><td>書籍ID</td><td>書籍名</td><td>分類</td><td>著者名</td><td>貸出状況</td></tr>";
   }

   if($row[0]==$_POST['bookid']){
    echo "<tr>
     <td>".$row[0]."</td>
     <td>".$row[1]."</td>
     <td>".$row[2]."</td>
     <td>".$row[3]."</td>
     <td>".$row[4]."</td>
     </tr>";
    
    $gaito++;
    }
   
    $cou++;
   } 

  /*本が一冊も存在しない*/
  if($gaito==0){
   echo "該当する書籍がありません。";
   include "error.php";
   mysql_close($db);
   exit();
   }
   echo "</table>";
  $_SESSION['bookid']=$_POST['bookid'];
  $_SESSION['title']=$_POST['title'];
  mysql_close($db);
?>    
  <?php
  echo "借りますか？";
  ?>
  <!--
  switch($_POST['modo']){
     case 1: echo "<p>借りますか？</p>";
     case 2: echo "<p>返しますか？</p>";
     default: break;
  }
  --> 
 <div >
  <form action="kari_kanryo.php" method="POST">	
   <a href="kari_kanryo.php"><input type="button" value="借りる" /></a>
   <!-- 
    switch($_POST['modo']){
     case 1: echo "借りる";
     case 2: echo "返す";
     default: break;
   } --> 
   <a href="cancel.php"><input type="button" value="取り消し" /></a>
   <a href="kari_search.php"><input type="button" value="戻る" /></a>
   <a href="logout.php"><input type="button" value="ログアウト"/></a>
  </form>
 </div>
 </body>
</html>

