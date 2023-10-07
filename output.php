<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Informasi Pendaftar</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
    <h1 align="center";>Detail Informasi Pendaftar</h1>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <?php
            if ($_GET) {
                if (isset($_GET["Name"])) {
                    echo "<tr><td>Name</td><td>" . $_GET["Name"] . "</td></tr>";
                }
                if (isset($_GET["Password"])) {
                    echo "<tr><td>Password</td><td>" . $_GET["Password"] . "</td></tr>";
                }
                if (isset($_GET["BornDate"])) {
                    echo "<tr><td>Born Date</td><td>" . $_GET["BornDate"] . "</td></tr>";
                }
                if (isset($_GET["Country"])) {
                    echo "<tr><td>Country</td><td>" . $_GET["Country"] . "</td></tr>";
                }
                if (isset($_GET["Gender"])) {
                    echo "<tr><td>Gender</td><td>" . $_GET["Gender"] . "</td></tr>";
                }
            }
        ?>
    </table>
</body>
</html>

</html>
