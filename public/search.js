function zoekOpTitel() {
  var zoekterm = document.getElementById("search-input").value.toLowerCase();


  var muziekItems = document.querySelectorAll(".music-info");
  muziekItems.forEach(function (item) {
      var titelElement = item.querySelector(".title");

      if (titelElement) {
          var titel = titelElement.textContent.toLowerCase();
          if (titel.includes(zoekterm)) {
              item.style.display = "block";
          } else {
              item.style.display = "none";
          }
      }
  });

  // Werk de URL bij met de zoekterm
  var nieuweURL = window.location.href.split("?")[0] + "?titel=" + encodeURIComponent(zoekterm);
  history.pushState({}, "", nieuweURL);
}

// Voeg een eventlistener toe aan de zoekknop
document.getElementById("search-button").addEventListener("click", zoekOpTitel);
