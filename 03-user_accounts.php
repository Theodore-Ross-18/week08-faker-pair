<?php

require './vendor/autoload.php';

$faker = Faker\Factory::create();

function generateUsername($email) {
    $parts = explode('@', $email);
    return strtolower($parts[0]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts</title>
</head>
<body>
<div class="container mt-5">
        <h2>User Accounts</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>User ID (UUID)</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Username</th>
                    <th>Password (SHA-256)</th>
                    <th>Account Created</th>
                </tr>
            </thead>
            <tbody>
            <?php
                for ($i = 0; $i < 10; $i++) {
                    $email = $faker->email;
                    $password = $faker->password;
                    
                    echo "<tr>";
                    echo "<td>" . $faker->uuid . "</td>";
                    echo "<td>" . $faker->name . "</td>";
                    echo "<td>" . $email . "</td>";
                    echo "<td>" . generateUsername($email) . "</td>";
                    echo "<td>" . hash('sha256', $password) . "</td>";
                    echo "<td>" . $faker->dateTimeBetween('-2 years')->format('Y-m-d H:i:s') . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
