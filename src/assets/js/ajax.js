// ajax.js

// Fonction pour ajouter une oeuvre aux favoris
function addLike(oeuvreId) {
    // Créer un nouvel objet XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurer la requête POST
    xhr.open("POST", "index.php?action=add_like", true); // Assurez-vous que l'URL est correcte

    // Définir le type de contenu de la requête
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Définir ce qui se passe lors de la fin de la requête
    xhr.onload = function () {
        if (xhr.status === 200) {
            // La requête a réussi
            var response = JSON.parse(xhr.responseText);
            console.log(response.message); // Afficher le message de succès dans la console
            // Ajouter ici le code pour informer l'utilisateur que l'œuvre a été ajoutée aux favoris avec succès
        } else {
            // La requête a échoué
            console.error("La requête a échoué");
            // Ajouter ici le code pour informer l'utilisateur qu'il y a eu une erreur lors de l'ajout de l'œuvre aux favoris
        }
    };

    // Gérer les erreurs de réseau
    xhr.onerror = function () {
        console.error(
            "Erreur réseau lors de la tentative d'envoi de la requête"
        );
        // Ajouter ici le code pour informer l'utilisateur qu'il y a eu une erreur réseau lors de l'ajout de l'œuvre aux favoris
    };

    // Envoyer la requête avec l'ID de l'œuvre en tant que paramètre
    xhr.send("artwork_id=" + encodeURIComponent(oeuvreId));
}

// Exemple d'utilisation :
// Si vous avez un bouton avec un identifiant 'add-like-btn' et que vous souhaitez ajouter l'œuvre avec l'ID '123' aux favoris lorsqu'il est cliqué :
document.getElementById("add-like-btn").addEventListener("click", function () {
    // get artwork_id from the url
    var url = window.location.href;
    var urlParams = new URLSearchParams(url);
    var oeuvreId = urlParams.get("artist_id");

    // Ajouter l'œuvre aux favoris
    addLike(oeuvreId);
});
