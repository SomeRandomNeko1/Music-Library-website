document.addEventListener("DOMContentLoaded", function () {
    var genreDropdown = document.getElementById("genre-dropdown");
    var musicContainer = document.querySelector(".music-container");
    function updateURL(selectedGenre) {
        var currentURL = window.location.href;
        var baseURL = currentURL.split("?")[0]; // Haal de basis-URL op zonder queryparameters
        var newURL = baseURL;

        if (selectedGenre) {
            newURL += "?genre=" + selectedGenre;
        }

        // Gebruik 'replaceState' om de URL bij te werken zonder de pagina opnieuw te laden
        window.history.replaceState({}, "", newURL);
    }

    // Luister naar veranderingen in het dropdown-menu
    genreDropdown.addEventListener("change", function () {
        var selectedGenre = genreDropdown.value;

        // Loop door elk <li> element in de lijst van nummers
        musicContainer.querySelectorAll("li").forEach(function (musicItem) {
            // Vang het <span> element met de genre-informatie
            var genreSpan = musicItem.querySelector(".genre");
        

            // Controleer of het geselecteerde genre overeenkomt met de genre van het nummer
            if (selectedGenre === "" || genreSpan.textContent === selectedGenre) {
                // Toon het nummer als het geselecteerde genre overeenkomt of als er geen genre is geselecteerd
                musicItem.style.display = "block";
            } else {
                // Verberg het nummer als het geselecteerde genre niet overeenkomt
                musicItem.style.display = "none";
            }
        });
        updateURL(selectedGenre);
    });

    // Haal het geselecteerde genre op uit de URL en pas het filter toe
    var urlParams = new URLSearchParams(window.location.search);
    var selectedGenreFromURL = urlParams.get("genre");
    genreDropdown.value = selectedGenreFromURL;
    genreDropdown.dispatchEvent(new Event("change")); 
});
