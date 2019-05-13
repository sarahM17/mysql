<?php
require 'db.php';

 $id = $_GET['id'];
 $sql = 'DELETE FROM hiking WHERE id=:id';
 $statement = $newpdo->prepare($sql);

 if ($statement->execute([':id'=> $id])) {
     header("Location:read.php");
 }
?>


