'use strict';

$( document ).ready(function() {
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#000"
        },
        "button": {
          "background": "#245733"
        }
      },
      "theme": "classic",
      "position": "bottom-right",
      "content": {
        "message": "Den här webbplatsen använder kakor för att du ska få den bästa upplevelsen på vår hemsida.",
        "dismiss": "Uppfattat",
        "link": "Läs mer här"
      }
    });
});
