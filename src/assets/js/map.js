const filters = document.querySelector(".filters");

filters.addEventListener("click", (e) => {
    alert("clicked");
    // check if popup is already open
    const popup = document.getElementById(".popup");
    if (popup) {
        popup.display = "none";
    } else {
        // create the popup
        const popup = document.createElement("div");
        popup.id = "popup";
        // next, create the popup content
    }
});
