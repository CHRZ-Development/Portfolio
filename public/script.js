const nav1button0 = document.getElementById("nav1Button0");
const nav1button1 = document.getElementById("nav1Button1");
const nav1button2 = document.getElementById("nav1Button2");
const nav1button3 = document.getElementById("nav1Button3");
// const nav1button4 = document.getElementById("nav1Button4");
const navBar1 = document.getElementById("sectionNavBar1");

const buttonsNavImg = document.getElementsByClassName("navBar1");

const header = document.getElementById("header");

const navMenuButton = document.getElementById("icon-drop-down-navigation-bar");
const dropDownMenu = document.getElementById("drop-down-menu");

const rock_bottom_right = document.getElementById("rock-bottom-right");
const corner_right = document.getElementById("corner-right");
const corner_rock = document.getElementById("rock-corner");
const floor = document.getElementById("floor");
const village = document.getElementById("village");

function floorResize()
{
    if (floor != null) {
        let width = document.body.clientWidth;

        let style = "48px ";
        for (let i = 0; i < width/48; i++) style = style + "48px ";
        style = style + "48px";
        floor.style.gridTemplateColumns = style;

        $.ajax({
            type: "POST",
            url: "./environments/resizeFloor.php",
            data: {
                "width": width
            },
            success: function (html) {
                // TODO Don't remove wheat, change this part
                while (floor.firstChild)
                    floor.removeChild(floor.firstChild);
                // TODO ------------------------------------
                floor.insertAdjacentHTML('beforeend', html);
            }
        });

        corner_right.style.gridColumnStart = (Math.round(width/48)+2).toString();
        corner_right.style.gridColumnEnd = (Math.round(width/48)+2).toString();
        corner_right.style.gridRowStart = "2";
        corner_rock.style.gridColumnStart = (Math.round(width/48)+2).toString();
        corner_rock.style.gridColumnEnd = (Math.round(width/48)+2).toString();
        corner_rock.style.gridRowStart = "3";
        rock_bottom_right.style.gridColumnStart = (Math.round(width/48)+2).toString();
        rock_bottom_right.style.gridColumnEnd = (Math.round(width/48)+2).toString();
        rock_bottom_right.style.gridRowStart = "4";
    }
}
$(floorResize);     // document on ready
window.addEventListener("resize", floorResize);

/**
 * Fait disparaitre ou non la barre de navigation selon la taille de la fenêtre.
 * @param width Taille de la fenêtre où est afficher le site internet.
 */
function navBarShowOrNot(width)
{
    if (width < 1350) {
        buttonsNavImg.item(0).parentElement.style.display = "none";
        navMenuButton.style.display = "block";
    } else {
        buttonsNavImg.item(0).parentElement.style.display = "grid";
        navMenuButton.style.display = "none";
    }
}

/**
 * Augmente ou reduit la taille du sol selon la taille de la fenêtre.
 * @param width Taille de la fenêtre où est afficher le site internet.
 */
function resizeFloor(width)
{
    if (floor != null) {
        let style = "";
        for (let i = 0; i < width/64; i++) style = style + "64px ";

        village.style.gridTemplateColumns = style;
    }
}

resizeFloor(document.body.clientWidth);
navBarShowOrNot(document.body.clientWidth);
window.addEventListener("resize", () => {
    // Fait grandir ou réduit la taille du sol selon la taille de la fenêtre.
    let width = document.body.clientWidth;

    resizeFloor(width);
    navBarShowOrNot(width);
})


let isMenuClick = false;
// Fait disparaître le menu quand il est trop haut pour ne pas qu'il fasse moche
window.addEventListener("scroll", (ev) => {
    if (document.getElementById("topBanner") != null)
        if (window.scrollY < document.getElementById("topBanner").clientHeight) {
            dropDownMenu.style.display = "none";
            isMenuClick = false;
        }
})

navMenuButton.addEventListener("click", () => {
    if (!isMenuClick) {
        dropDownMenu.style.display = "block";
        dropDownMenu.style.top = header.style.top + 32*3 + "px";
        isMenuClick = true;
    } else if (isMenuClick) {
        dropDownMenu.style.display = "none";
        isMenuClick = false;
    }

    if (document.getElementById("topBanner") != null)
        if (window.scrollY < document.getElementById("topBanner").clientHeight)
            window.scrollTo(0, header.clientHeight + dropDownMenu.clientHeight - 32*3);
})
// si il clique ailleurs que sur le l'icon du menu deroulant
document.addEventListener("click", (ev) => {
    if (ev.target.id !== "icon-drop-down-navigation-bar" && isMenuClick) {
        dropDownMenu.style.display = "none";
        isMenuClick = false;
    }
})


/**
 * Crée une ecoute d'evenement pour un bouton lorsque il est en contact de la souris
 * Applique une animation FadeIn ou FadeOut selon où la souris ce situe
 * @param button document.getElementById ...
 * @param id Un String qui contient l'ID du bouton concerner (ex: "nav1Button0")
 */
function addEventListenerOverButton(button, id) {
    let navsButtons = [nav1button0, nav1button1, nav1button2, nav1button3];

    button.addEventListener("mouseover", () => {
        for(let n = 0; n < navsButtons.length; n++) {
            if(navsButtons[n].id !== id)
                navsButtons[n].style.animationName = 'opacityOut';
            else navsButtons[n].style.animationName = 'opacityIn';

            navsButtons[n].style.animationDuration = '.5s';
            navsButtons[n].style.animationFillMode = 'forwards';
        }
    });
}

// Animation de "Focus".
addEventListenerOverButton(nav1button0, "nav1Button0");     // Accueil
addEventListenerOverButton(nav1button1, "nav1Button1");     // Videos
addEventListenerOverButton(nav1button2, "nav1Button2");     // Projets
addEventListenerOverButton(nav1button3, "nav1Button3");     // Competence
// addEventListenerOverButton(nav1button4, "nav1Button4");     // Contact


// Quand le souris se retire de la barre de navigation, tous les boutons reviennent a la normale.
navBar1.addEventListener("pointerleave", () => {
    let navsButtons = [nav1button0, nav1button1, nav1button2, nav1button3];

    for(let n = 0; n < navsButtons.length; n++)
        navsButtons[n].style.animationName = 'opacityIn';
});

