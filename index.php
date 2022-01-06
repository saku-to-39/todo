<?php
  /**テーブル定義
   * posts 
   * id int primary
   * title text 
   * 
   * user
   * id int primary
   * username text
   * email text
   * password text
   * 
   * 要件
   * CRUD処理ができること
   * 新規登録、ログイン、ログアウトができること
   * 
   * bootstrapでヘッダー、フッターを作ること
   * 
   * 
   * 
   * 1.PDOインスタンスを生成する
   * 1.クエリを流す
   * foreachで表示させる
   */
  echo "おはよう、こんにちは、こんばんは";
 $dsn = 'mysql:dbname=todo;host=localhost:8889';
 $pdo = new PDO($dsn, "root","root");
 var_dump($pdo);
 $sql = "select * from posts";
 $stmt = $pdo->query($sql);

 $posts = $stmt->fetchAll();

 
 echo('<pre>');
 var_dump($posts);
 echo('</pre>');

?>
