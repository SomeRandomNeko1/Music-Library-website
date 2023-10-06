<!DOCTYPE html>
<html>
<head>
    <title>Muziek Singles</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Muziek Singles</h1>

    <form id="search-form">
      <input type="text" id="search-input" placeholder="Zoek op titel of artiest">
      <select id="genre-dropdown">
          <option value="">Selecteer genre</option>
          <!-- Vul hier genres in -->
      </select>
      <button type="submit">Zoeken</button>
    </form>
    <div id="home-container">
    <ul class="music-container">
    <?php 
    for ($i = 0; $i < 10; $i++) {
      include 'card.php';
    }
    ?>
    </ul>
    </div>
</body>
</html>
