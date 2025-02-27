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
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Publication Year</th>
                    <th>ISBN</th>
                    <th>Summary</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    
</body>
</html>