<!DOCTYPE html>
<html>
<head>
    <title>SONGS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script defer src="script.js"></script>
    <script defer src="search.js"></script>
</head>
<body>
    <h1>SONGS</h1>

    <form id="search-form">
    <input type="text" id="search-input" placeholder="Zoek op titel of artiest">
        <button type="button" id="search-button">Zoek</button>
    </form> 

    <form id="search-form">
    <select id="genre-dropdown" name="genre">
        <option value="">All Genre</option>
        <option value="Rap">Rap</option>
        <option value="Hip Hop">Hip Hop</option>
        <option value="R&B">R&B</option>
        <option value="Pop">Pop</option>
        <option value="Rock">Rock</option>
    </select>
    </form>


    <div id="home-container">
        <ul class="music-container">
            <?php 
            include 'card.php';

            for ($i = 0; $i < count($titles); $i++) {
                $title = $titles[$i];
                $artist = $artists[$i];
                $genre = $genres[$i];
                $imageURL = $imageURLs[$i];
            ?>
            <li class="music-info">
                <span class="title"><?php echo $title; ?></span>
                <span class="artist"><?php echo $artist; ?></span>
                <span class="genre"><?php echo $genre; ?></span>
                <a href="song_details.php?image=<?php echo $imageURL; ?>">
                    <figure class="music-info image">
                        <img src="<?php echo $imageURL; ?>" alt="">
                    </figure>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
</body>
</html>
