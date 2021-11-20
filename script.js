

let nav1button0 = document.getElementById("nav1Button0");
let nav1button1 = document.getElementById("nav1Button1");
let nav1button2 = document.getElementById("nav1Button2");
let nav1button3 = document.getElementById("nav1Button3");
let nav1button4 = document.getElementById("nav1Button4");
let navBar1 = document.getElementById("sectionNavBar1");


/**
 * Crée une ecoute d'evenement pour un bouton lorsque il est en contact de la souris
 * Applique une animation FadeIn ou FadeOut selon où la souris ce situe
 * @param button document.getElementById ...
 * @param id Un String qui contient l'ID du bouton concerner (ex: "nav1Button0")
 */
function addEventListenerOverButton(button, id) {
    let navsButtons = [nav1button0, nav1button1, nav1button2, nav1button3, nav1button4];

    button.addEventListener("mouseover", ev => {
        for(let n = 0; n < navsButtons.length; n++) {
            if(navsButtons[n].id !== id) {
                navsButtons[n].style.animationName = 'opacityOut';
            } else navsButtons[n].style.animationName = 'opacityIn';

            navsButtons[n].style.animationDuration = '1s';
            navsButtons[n].style.animationFillMode = 'forwards';
        }
    })
}

// Animation de "Focus".
addEventListenerOverButton(nav1button0, "nav1Button0");     // Accueil
addEventListenerOverButton(nav1button1, "nav1Button1");     // Videos
addEventListenerOverButton(nav1button2, "nav1Button2");     // Projets
addEventListenerOverButton(nav1button3, "nav1Button3");     // Competance
addEventListenerOverButton(nav1button4, "nav1Button4");     // Contact


// Quand le souris se retire de la barre de navigation, tous les boutons reviennent a la normale.
navBar1.addEventListener("pointerleave", ev => {
    let navsButtons = [nav1button0, nav1button1, nav1button2, nav1button3, nav1button4];

    for(let n = 0; n < navsButtons.length; n++)
        navsButtons[n].style.animationName = 'opacityIn';
})
