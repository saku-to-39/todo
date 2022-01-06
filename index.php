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
 $dsn = 'mysql:dbname=todo;host=localhost:8889';
 $pdo = new PDO($dsn, "root","root");
 $sql = "select * from posts";
 $stmt = $pdo->query($sql);

 $posts = $stmt->fetchAll();

 /*echo('<pre>');
 var_dump($posts);
 echo('</pre>');*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <h2>一覧画面</h2>
  <hr>
  <table class="table">
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">TITLE</th>
    </tr>
    <?php foreach($posts as $post) :?>
    <tr>
      <td class="text-center"><?php echo $post['id'];?></td>
      <td class="text-center"><?php echo $post['title'];?></td>
    </tr>
    <?php endforeach?>
  </table>
</body>
</html>
