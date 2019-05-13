<?php
require "db.php";

if(isset($_POST['button']) && !empty($_POST)) {
    try {



        $name = $_POST['fname'];
        $difficulty = $_POST['difficulty'];
        $distance = $_POST['distance'];
        $duration = $_POST['duration'];
        $height_difference = $_POST['height_difference'];


        // Define an insert query
        $sql = "INSERT INTO hiking (fname, difficulty, distance, duration, height_difference)
        VALUES (:fname, :difficulty, :distance, :duration, :height_difference)";
        $stmt = $newpdo->prepare($sql);
        var_dump($stmt);

        //$stmt->bindParam(':id', $id);
        $stmt->bindParam(':fname', $name);
        $stmt->bindParam(':difficulty', $difficulty);
        $stmt->bindValue(':distance', $distance);
        $stmt->bindParam(':duration', $duration);
        $stmt->bindValue(':height_difference', $height_difference);


        $stmt->execute();
        echo "New records created successfully";
        header('Location:read.php?create');
    }


    catch(PDOException $i) {
        echo "Error: " . $i->getMessage();
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
        <label for="fname">Name</label>
        <input type="text" name="fname">
    </div>

    <div>
        <label for="difficulty">Difficulté</label>
        <select name="difficulty">
            <option value="très facile">Très facile</option>
            <option value="facile">Facile</option>
            <option value="moyen">Moyen</option>
            <option value="difficile">Difficile</option>
            <option value="très difficile">Très difficile</option>
        </select>
    </div>

    <div>
        <label for="distance">Distance</label>
        <input type="text" name="distance" value="">
    </div>
    <div>
        <label for="duration">Durée</label>
        <input type="time" name="duration" value="">
    </div>
    <div>
        <label for="height_difference">Dénivelé</label>
        <input type="text" name="height_difference" value="">
    </div>
    <button type="submit" name="button">Envoyer</button>
</form>
</body>
</html>