/* Event button */

let homeButton = document.getElementById("homeButton");
homeButton.addEventListener("click", homeButtonEvent, false);
/**
 * On click event
 * FadeOut animation
 * Change HTML page to "acceuil"
 * @param event
 * @return index.html page
 */
function homeButtonEvent(event)
{
    let id = setInterval(frame, 3);
    let opacity = 100;

    function frame() {
        if (opacity <= 0) { // Finish
            clearInterval(id);
            window.location.href = "index.html";
        } else { // Fadeout animation process
            opacity -= 3;
            document.body.style.opacity = opacity + '%';
        }
    }
}

/* ========== */


document.getElementById("projectButton").addEventListener("click", ev => {
    window.location.href = "projets";
})

document.getElementById("contactButton").addEventListener("click", ev => {
    window.location.href = "contact";
})

document.getElementById("menuIcon").addEventListener("click", ev => {

})
