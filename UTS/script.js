// script.js
document.addEventListener("DOMContentLoaded", function() {
    const profileSection = document.getElementById("profile");

    profileSection.style.opacity = 0;
    setTimeout(() => {
        profileSection.style.transition = "opacity 1s";
        profileSection.style.opacity = 1;
    }, 500);
});