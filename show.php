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
 $id = filter_input(INPUT_GET, 'id');

 $dsn = 'mysql:dbname=todo;host=localhost:8889';
 $pdo = new PDO($dsn, "root","root");
 $sql = "select * from posts where id = :id";
 $stmt = $pdo->prepare($sql);
 $stmt->bindValue(":id", $id, PDO::PARAM_INT);
 $stmt->execute();
 $post = $stmt->fetch();
 /*echo('<pre>');
 var_dump($posts);
 echo('</pre>');*/

 //新規作成画面の作成

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
      <th class="text-center">Id</th>
      <th class="text-center">Title</th>
      <th class="text-center">Edit</th>
    </tr>
    <tr>
      <td class="text-center"><?php echo $post['id'];?></td>
      <td class="text-center"><?php echo $post['title'];?></td>
      <td class="text-center"><a href="edit.php?id=<?php  echo $post['id'];?>">編集する</a></td>
    </tr>
  </table>
  <a href="index.php">一覧画面</a>
  <button><a href="destroy.php?id=<?php echo $post['id'];?>">削除する</a></button>
</body>
</html>
