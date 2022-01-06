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
  <h2>編集画面</h2>
  <hr>
  <form action="update.php" method='post'>
    <div class="form-group">
      タイトル
      <input type="hidden" name='id' value="<?php echo $post['id'];?>">
      <input type="text" name="title"class="form-control" value="<?php echo $post['title'];?>">
      <button type="submit" class="btn btn-primary">更新</button>
    </div>
  <a href="show.php?id=<?php echo $post['id'];?>">編集画面</a>
</body>
</html>
