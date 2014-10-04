<!DOCTYPE>
<html>
 <head>
 <title>管理者ログイン画面</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width,initial-scale=1.0" />
 <link rel="stylesheet" href="./pub_search.css" type="text/stylesheet" /> 
 </head>
 <body>
  <div id="iti">
   <div id="yon">
  図書管理システム
   </div>
  <div id="kensaku">
   <img id="gazou" src="" >
   <div id="san">
   ログイン
   </div>
    <form action="hantei_admin.php" method="POST">
     ユーザID<input type="text" name="ident" /><br/>
     パスワード<input type="password" name="pass" />
     <input type="submit" value="ログイン"/>
     <input type="reset" value="消去" />
     <a href="shinki.php">新規ユーザ登録</a>
     <a href="login_admin.php">管理者としてログイン</a>
    </form>
  </div>
  </div>
 </body>
</html>


