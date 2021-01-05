<?php
require('index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personne</title>
</head>
<body>
    <table>
        <tr>
            <th>Nom</th>
            <th>Genre</th>
            <th>Date de naissance</th>
        </tr>
        <tr>
            <td><?php echo $personChadia['name'] ;?></td>
            <td><?= $personChadia['gender'];?> </td>
            <td><?= $personChadia['birthday'];?></td>
        </tr>
        <tr>
        <td><?php echo $personJulien['name'] ;?></td>
            <td><?= $personJulien['gender'];?> </td>
            <td><?= $personJulien['birthday'];?></td>
        </tr>
        <tr>
        <td><?php echo $personMathilde['name'] ;?></td>
            <td><?= $personMathilde['gender'];?> </td>
            <td><?= $personMathilde['birthday'];?></td>
        </tr>
        </table>
    </body>
</html>
