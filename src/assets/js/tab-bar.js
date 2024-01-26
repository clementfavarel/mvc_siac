// tab-bar.js

document.addEventListener("DOMContentLoaded", function () {
    // Get the current action from the URL
    var action = getParameterByName("action");

    // Update tab images based on the current action
    updateTabImages(action);
});

function updateTabImages(currentAction) {
    var tabs = document.querySelectorAll(".tab");

    tabs.forEach(function (tab, index) {
        var tabIcon = tab.querySelector(".tab_icon");
        var tabText = tab.querySelector(".tab_text");

        // Mapping between tab texts and SVG filenames
        var textToIconMap = {
            Plan: "map",
            Scan: "scan",
            Favoris: "likes",
            Profil: "profile",
        };

        // Update the tab image based on the current action
        var iconName = textToIconMap[tabText.textContent.trim()];

        var iconSrc =
            currentAction === iconName
                ? "assets/icons/" + iconName + "-on.svg"
                : "assets/icons/" + iconName + ".svg";

        // Update tab icon source
        tabIcon.src = iconSrc;

        // Make sure the image has an alt attribute for accessibility
        tabIcon.alt = iconName;

        // You can also update other styles or classes based on the current action if needed
    });
}

// Function to get URL parameters
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
