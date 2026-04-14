<?php include 'config.php'; ?>

<h2>Clubs</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Host Country</th>
        <th>Tournament</th>
    </tr>

    <?php
    $stmt = $conn->query("SELECT * FROM club");

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['host_country']}</td>
        <td>{$row['tournament_name']}</td>
    </tr>";
    }
    ?>

</table>

<a href="index.html">Back</a>