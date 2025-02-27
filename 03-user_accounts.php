<?php

require './vendor/autoload.php';

$faker = Faker\Factory::create();

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
                
            </tbody>
        </table>
    </div>
</body>
</html>
