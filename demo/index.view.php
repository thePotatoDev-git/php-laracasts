<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <!-- <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style> -->
</head>
<body>
    <h1>Recommended Movies</h1>
    <ul>
        <!-- Start a foreach loop. Colon (:) is similar to using opening curly braces. -->
        <?php foreach ($filteredMovies as $movie) : ?> 
                <li>
                    <p><?= "Title: $movie[title]" ?></p>
                    <p><?= "Director: $movie[director]" ?></p>
                    <p><?= "Release date: $movie[releaseDate]" ?></p>
                </li>
        <?php endforeach; ?> 
        <!-- Ends the foreach loop -->
    </ul>
    
    <a href="review/index.view.php">Second page</a>
</body>
</html>