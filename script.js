
let nav1button0 = document.getElementById("nav1Button0");
let nav1button1 = document.getElementById("nav1Button1");
let nav1button2 = document.getElementById("nav1Button2");
let nav1button3 = document.getElementById("nav1Button3");
let nav1button4 = document.getElementById("nav1Button4");
let navBar1 = document.getElementById("sectionNavBar1");

let buttonBar1 = document.getElementById("buttonBar1");
let buttonBar2 = document.getElementById("buttonBar2");

let bannerTop = document.getElementById("bannerCHRZ2");
let bannerTest = document.getElementById("bannerTest");

let header = document.getElementById("header");

let rock_bottom_right = document.getElementById("rock-bottom-right");
let corner_right = document.getElementById("corner-right");
let corner_rock = document.getElementById("rock-corner");
let floor = document.getElementById("floor");
let village = document.getElementById("village");


let floors = [];
function floorResize()
{
    let width = document.body.clientWidth;

    let style = "48px ";
    for (let i = 0; i < width/48; i++) style = style + "48px ";
    style = style + "48px";

    floor.style.gridTemplateColumns = style;


    for (let i = 0; i < floors.length; i++) floors[i].remove();
    floors = [];

    for (let i = 2; i < width/48; i++) {
        const floor_top = document.createElement("img");
        const rock_top = document.createElement("img");
        const rock_bottom = document.createElement("img");
        floor_top.src = "https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/floor-top.png";
        floor_top.alt = "floor-top";
        rock_bottom.src = "https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-bottom.png";
        rock_bottom.alt = "floor-top";
        rock_bottom.className = "rock-bottom";
        rock_top.src ="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-top_" +  Math.round(Math.random()*4) + ".png";
        rock_top.alt = "rock-top";
        floor_top.style.gridColumnStart = i.toString();
        floor_top.style.gridColumnEnd = i.toString();
        rock_bottom.style.gridColumnStart = i.toString();
        rock_bottom.style.gridColumnEnd = i.toString();
        rock_top.style.gridColumnStart = i.toString();
        rock_top.style.gridColumnEnd = i.toString();
        floor_top.style.gridRowStart = "1";
        rock_top.style.gridRowStart = "2";
        rock_bottom.style.gridRowStart = "3";
        floor_top.style.width = "100%";
        floor_top.style.height = "100%";
        rock_top.style.width = "100%";
        rock_top.style.height = "100%";
        floors.push(floor_top);

        floor.appendChild(floor_top);
        floor.appendChild(rock_top);
        floor.appendChild(rock_bottom);
    }
    corner_right.style.gridColumnStart = (floors.length+2).toString();
    corner_right.style.gridColumnEnd = (floors.length+2).toString();
    corner_right.style.gridRowStart = "1";
    corner_rock.style.gridColumnStart = (floors.length+2).toString();
    corner_rock.style.gridColumnEnd = (floors.length+2).toString();
    corner_rock.style.gridRowStart = "2";
    rock_bottom_right.style.gridColumnStart = (floors.length+2).toString();
    rock_bottom_right.style.gridColumnEnd = (floors.length+2).toString();
    rock_bottom_right.style.gridRowStart = "3";
}

floorResize();
window.addEventListener("resize", floorResize);


let width = document.body.clientWidth;

let style = "";
for (let i = 0; i < width/64; i++) style = style + "64px ";

village.style.gridTemplateColumns = style;
window.addEventListener("resize", () => {
    let width = document.body.clientWidth;

    let style = "";
    for (let i = 0; i < width/64; i++) style = style + "64px ";

    village.style.gridTemplateColumns = style;
})


/**
 * Crée une ecoute d'evenement pour un bouton lorsque il est en contact de la souris
 * Applique une animation FadeIn ou FadeOut selon où la souris ce situe
 * @param button document.getElementById ...
 * @param id Un String qui contient l'ID du bouton concerner (ex: "nav1Button0")
 */
function addEventListenerOverButton(button, id) {
    let navsButtons = [nav1button0, nav1button1, nav1button2, nav1button3, nav1button4];

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
addEventListenerOverButton(nav1button4, "nav1Button4");     // Contact


// Quand le souris se retire de la barre de navigation, tous les boutons reviennent a la normale.
navBar1.addEventListener("pointerleave", () => {
    let navsButtons = [nav1button0, nav1button1, nav1button2, nav1button3, nav1button4];

    for(let n = 0; n < navsButtons.length; n++)
        navsButtons[n].style.animationName = 'opacityIn';
});

buttonBar1.addEventListener("mouseover", () => {
    bannerTop.style.display = 'block';
    bannerTest.style.display = 'none';
});
buttonBar2.addEventListener("mouseover", () => {
    bannerTest.style.display = 'block';
    bannerTop.style.display = 'none';
});
