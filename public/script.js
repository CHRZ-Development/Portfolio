const nav1button0 = document.getElementById("nav1Button0");
const nav1button1 = document.getElementById("nav1Button1");
const nav1button2 = document.getElementById("nav1Button2");
const nav1button3 = document.getElementById("nav1Button3");
// const nav1button4 = document.getElementById("nav1Button4");
const navBar1 = document.getElementById("sectionNavBar1");
const header = document.getElementById("header");
const dropDownMenu = document.getElementById("drop-down-menu");

const buttonsNavImg = document.getElementsByClassName("navBar1");
const navMenuButton = document.getElementById("icon-drop-down-navigation-bar");

function navBarShowOrNot(_width)
{
    buttonsNavImg.item(0).parentElement.style.display = (_width < 1350) ? "none" : "grid";
    navMenuButton.style.display = (_width < 1350) ? "block" : "none";
}

const floor = document.getElementById("floor");
function floorResize(_width)
{
    const floorTileSize = 48;

    let style = floorTileSize + "px ";
    for (let i = 0; i < _width/floorTileSize; i++) style = style + floorTileSize + "px ";
    style = style + floorTileSize + "px";
    floor.style.gridTemplateColumns = style;

    $.ajax({
        type: "POST",
        url: "./environments/floorTileFiller.php",
        data: {
            "width": _width
        },
        success: function (html) {
            const wheat = $('#floor .wheat').detach()
            $('#floor').empty().append(wheat);

            floor.insertAdjacentHTML('beforeend', html);
        }
    });
}

const village = document.getElementById("village");
function villageResize(_width)
{
    const villageTileSize = 64;

    let style = villageTileSize + "px ";
    for (let i = 0; i < _width/villageTileSize; i++) style = style + villageTileSize + "px ";
    style = style + villageTileSize + "px";

    village.style.gridTemplateColumns = style;
}

let oldWidth = document.body.clientWidth;
$(() => {   // Document on ready
    floorResize(oldWidth);
    villageResize(oldWidth);
    navBarShowOrNot(oldWidth);
});
window.addEventListener("resize", () => {
    const width = document.body.clientWidth;
    if (floor != null && oldWidth !== width) {
        floorResize(width);
        villageResize(width);
        navBarShowOrNot(width);

        oldWidth = width;
    }
});

// PLAYER ON THE VILLAGE
const playerMoveSpeed = 5;
$(document).keydown((key) => {
    const player = $("#bucheronPerso");
    switch (key.which) {
        case 68: // D key
            player.css('left', player.offset().left + playerMoveSpeed);
            break;
        case 81: // Q key
            player.css('left', player.offset().left - playerMoveSpeed);
            break;
    }
});

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

