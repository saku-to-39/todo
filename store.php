<?php
   $title = filter_input(INPUT_POST, 'title');
   $dsn = 'mysql:dbname=todo;host=localhost:8889';
   $pdo = new PDO($dsn, "root","root");
   

   $sql = "insert into posts (title) values(:title)";
   $stmt = $pdo->prepare($sql);
   $stmt->bindValue(':title', $title, PDO::PARAM_STR);
   $success = $stmt->execute();

   if (!$success){
    echo "保存に失敗しました";
   }

   header('Location:index.php');
?>