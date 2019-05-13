<?php
require "db.php";

$id = $_GET['id'];
$sql = 'SELECT * FROM hiking WHERE id=:id';
$statement = $newpdo->prepare($sql);
$statement->execute([':id' => $id ]);
$row = $statement->fetch(PDO::FETCH_OBJ);

if(isset($_POST['fname']) && isset($_POST['difficulty']) && isset($_POST['distance']) && isset($_POST['duration']) && isset($_POST['height_difference'])){
    $name = $_POST['fname'];
    $difficulty = $_POST['difficulty'];
    $distance = $_POST['distance'];
    $duration = $_POST['duration'];
    $height_difference = $_POST['height_difference'];
    $sql = "UPDATE hiking SET fname=:fname, difficulty=:difficulty, distance=:distance, duration=:duration, height_difference=:height_difference WHERE id=:id";
    $statement = $newpdo->prepare($sql);

    if($statement->execute([':id'=> $id, ':fname'=> $name, ':difficulty'=> $difficulty, ':distance'=> $distance, ':duration'=> $duration, ':height_difference'=> $height_difference])) {
        $message = 'data inserted successfully';
        header("Location:read.php");
    }


}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajouter une randonnée</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<a href="read.php">Liste des données</a>
<h1>Ajouter</h1>
<form action="" method="post">
    <div>
        <label for="name">Name</label>
        <input value="<?= $row->name; ?>" type="text" name="name" >
    </div>

    <div>
        <label for="difficulty">Difficulté</label>
        <input value="<?= $row->difficulty; ?>" type="text" name="difficulty" >
    </div>

    <div>
        <label for="distance">Distance</label>
        <input value="<?= $row->distance; ?>" type="text" name="distance" >
    </div>
    <div>
        <label for="duration">Durée</label>
        <input value="<?= $row->duration; ?>" type="text" name="duration" >
    </div>
    <div>
        <label for="height_difference">Dénivelé</label>
        <input value="<?= $row->height_difference; ?>" type="text" name="height_difference" >
    </div>
    <button type="submit" name="button">Envoyer</button>
</form>
</body>
</html>

