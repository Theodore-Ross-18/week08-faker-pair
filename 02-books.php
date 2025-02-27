<?php

require './vendor/autoload.php';
$faker = Faker\Factory::create();

$genres = ['Fiction','Mystery','Science Fiction','Fantasy',
'Romance', 'Thriller', 'Historical', 'Horror'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
    <h2 class="fw-bold">Online Library Book Records</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="fw-bold">
                    <th>Title</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Publication Year</th>
                    <th>ISBN</th>
                    <th>Summary</th>
                </tr>
            </thead>
            <tbody>
            <?php
            for ($i = 0; $i < 15; $i++) {
                echo "<tr>";
                echo "<td>" . $faker->words(3, true) . "</td>";
                echo "<td>" . $faker->name  . "</td>";
                echo "<td>" . $genres[array_rand($genres)] . "</td>";
                echo "<td>" . $faker->numberBetween(1900, 2024) . "</td>";
                echo "<td>" . $faker->isbn13 . "</td>";
                echo "<td>" . $faker->paragraph(1) . "</td>";
                echo "</tr>";
            }
            ?> 
            </tbody>
        </table>
    </div>
    
</body>
</html>