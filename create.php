<?php
//フォーム画面の作成

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
  <form action="store.php" method='post'>
    <div class="form-group">
      タイトル
      <input type="text" name="title"class="form-control">
      <button type="submit" class="btn btn-primary">登録</button>
    </div>
  </form>
</body>
</html>
