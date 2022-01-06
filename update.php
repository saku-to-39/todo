<?php
   $id = filter_input(INPUT_POST, 'id');
   $title = filter_input(INPUT_POST, 'title');
   $dsn = 'mysql:dbname=todo;host=localhost:8889';
   $pdo = new PDO($dsn, "root","root");
   

   $sql = "update posts set title = :title where id = :id ";
   $stmt = $pdo->prepare($sql);
   $stmt->bindValue(':title', $title, PDO::PARAM_STR);
   $stmt->bindValue(':id', $id, PDO::PARAM_INT);
   $success = $stmt->execute();

   if (!$success){
    echo "保存に失敗しました";
   }

   header('Location:index.php');
?>