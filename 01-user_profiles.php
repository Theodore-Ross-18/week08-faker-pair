<?php

require './vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Profiles</title>
</head>
<body>
<div class="container mt-5">
        <h2>User Profiles</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Complete Address</th>
                    <th>Birthdate</th>
                    <th>Job Title</th>
                </tr>
            </thead>
            <tbody>
            <?php
                for ($i = 0; $i < 5; $i++) {
                    echo "<tr>";
                    echo "<td>" . $faker->name . "</td>";
                    echo "<td>" . $faker->email . "</td>";
                    echo "<td>+63 " . substr($faker->phoneNumber, -9) . "</td>";
                    echo "<td>" . $faker->address . "</td>";
                    echo "<td>" . $faker->date('Y-m-d') . "</td>";
                    echo "<td>" . $faker->jobTitle . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>