<!-- <?php 
        $name = "PHP for Dummies";
        $read = true;

        if ($read == true) {
            $status = "You have read $name.";
        } else {
            $status = "You have not read $name";
        }
    ?>
    <h1>
        <?php echo $status . " (Using echo)"?>
    </h1>
    <h1>
        <?= $status; ?>
    </h1> -->

<?php 
    $movies = [
        [
            'title' => 'Zoolander',
            'director' => 'Ben Stiller',
            'releaseDate' => 2002,
        ],
        [
            'title' => 'Tropic Thunder',
            'director' => 'Ben Stiller',
            'releaseDate' => 2008,
        ],
        [
            'title' => 'Dodgeball',
            'director' => 'Not Ben Stiller',
            'releaseDate' => 2006,
        ],
    ];

    // function filter($items, $function) {
    //     $filteredItems = [];

    //     foreach ($items as $item) {
    //         if ($function($item)) {
    //             $filteredItems[] = $item;
    //         }
    //     };

    //     return $filteredItems;
    // };

    $filteredMovies = array_filter($movies, function ($movie) {
        return $movie['releaseDate'] >= 2004;
    });

    require 'index.view.php';
?>