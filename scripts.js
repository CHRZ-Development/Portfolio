/**
 * CHRZASZCZ Naulan
 * web-site: https://www.chrz-development.fr/
 */


/**=- Events buttons -=**/

/**
 * It allow to create a button with a listener
 * 2 args:
 *  - elementId
 *  - ref (href)
 */
class ButtonsEvent
{
    constructor(props)
    {
        this.elementId = props.elementId;
        this.button = document.getElementById(this.elementId);
        this.button.addEventListener("click", run, false);

        function run(event)
        {
            let elementInter = setInterval(frame, 3);
            let opacity = 100;

            function frame()
            {
                if (opacity <= 0)
                {   // Finish
                    clearInterval(elementInter);
                    window.location.href = props.ref;
                } else { // Fadeout animation process
                    opacity -= 3;
                    document.body.style.opacity = opacity + '%';
                }
            }
        }
    }
}

// Navigation bar
new ButtonsEvent({elementId: "homeButton",ref: "index.html"});
new ButtonsEvent({elementId: "projectButton",ref: "projets"});
new ButtonsEvent({elementId: "contactButton",ref: "contact"});
new ButtonsEvent({elementId: "videosButton",ref: "videos"});

document.getElementById("menuIcon").addEventListener("click", ev => {

})
