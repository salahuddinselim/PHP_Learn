<?php include 'config.php'; ?>

<h2>Players</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
        <th>Club</th>
    </tr>

    <?php
    $stmt = $conn->query("SELECT * FROM player");

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['country']}</td>
        <td>{$row['club_name']}</td>
    </tr>";
    }
    ?>

</table>

<a href="index.html">Back</a>