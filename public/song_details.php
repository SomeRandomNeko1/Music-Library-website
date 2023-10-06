<!DOCTYPE html>
<html>
<head>
    <title>Song Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Song Details</h1>

    <?php
    include 'card.php';
    if (isset($_GET['image'])) {
        $imageURL = $_GET['image'];

        $index = array_search($imageURL, $imageURLs);

        if ($index !== false) {
            $title = $titles[$index];
            $artist = $artists[$index];
            $genre = $genres[$index];
            $duration = $durations[$index];
            $releaseYear = $releaseYears[$index];

            // Toon de details van het nummer
            echo '<h2>Title: ' . $title . '</h2>';
            echo '<p>Artist: ' . $artist . '</p>';
            echo '<p>Genre: ' . $genre . '</p>';
            echo '<p>Duration: ' . $duration . '</p>';
            echo '<p>Release year: ' . $releaseYear . '</p>';
            // Voeg hier andere informatie toe zoals duur en release datum als dat beschikbaar is
            echo '<img src="' . $imageURL . '" alt="Song Image">';
        } else {
            echo '<p>Nummer niet gevonden.</p>';
        }
    } else {
        echo '<p>Geen nummer geselecteerd.</p>';
    }
    ?>


</body>
</html>
