<?php
$host = 'localhost';
$dbname = 'weather-app';
$username = 'root';
$password = 'FFwachten123!';
try {
    $newpdo = new PDO("mysql1:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $newsql = 'SELECT * FROM Weather';
    $query = $newpdo->query($newsql);
    $query->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $i) {
    die("Could not connect to the database $dbname :" . $i->getMessage());
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="container">
    <h1>Weather</h1>
    <form action="submit.php" method="POST">
        <label for="city">City</label><br>
        <input type="text" name="city"><br><br>
        <label for="high">High</label><br>
        <input type="number" name="up"><br><br>
        <label for="low">Low</label><br>
        <input type="number" name="down"><br><br>
        <input type="submit" name="submit">
    </form>
    <br>
    <table class="table table-bordered table-condensed">
        <thead>
        <tr>
            <th>City</th>
            <th>High</th>
            <th>Low</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $query->fetch()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['city']) ?></td>
                <td><?php echo htmlspecialchars($row['high']); ?></td>
                <td><?php echo htmlspecialchars($row['low']); ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
    <form action="submit.php" method="POST">
        <br><h2>Delete</h2>
        <label for="delete">City</label><br>
        <input type="text" name="delete"><br><br>
        <input type="submit" name="deleteBtn">
    </form>
</div>
</body>
</html>