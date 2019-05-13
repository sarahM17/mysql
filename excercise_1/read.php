<?php
require "db.php";

    $sql = 'SELECT * FROM hiking';
    $query = $newpdo->query($sql);
    $query->setFetchMode(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table table-hover table-dark w-75 m-auto pt-5">
    <h3>List des randonnées</h3>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Difficulty</th>
            <th scope="col">Distance</th>
            <th scope="col">Duration</th>
            <th scope="col">Height difference</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $query->fetch()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']) ?></td>
                <td><?php echo htmlspecialchars($row['fname']) ?></td>
                <td><?php echo htmlspecialchars($row['difficulty']); ?></td>
                <td><?php echo htmlspecialchars($row['distance']); ?> mètre</td>
                <td><?php echo htmlspecialchars($row['duration']); ?> hours</td>
                <td><?php echo htmlspecialchars($row['height_difference']); ?> mètre</td>
                <td>
                    <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete those item')" href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</body>
<style>
    /*
    .table {
        padding: 5px 10px;

    }
    .row {
        padding: 5px 10px;
    }*/

</style>
</html>
