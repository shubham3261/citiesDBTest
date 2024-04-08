<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
<h2>
    Data Display for Assignment
</h2>
    </header>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>City</th>
                <th>Population</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "citiesdb");

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM cities";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["city_name"] . "</td>";
                        echo "<td>" . $row["population"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No data found</td></tr>";
                }

                mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>
</html>
