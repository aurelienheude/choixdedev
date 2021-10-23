var isMobile; //superglobal waou IS 


/*******************************   BOUTON MENU   *******************************/
const menuOpen = (menu) => {
    menu.classList.add("transition_menu");
    menu.classList.add("open");
}

const menuClose = (menu) => {
    menu.classList.remove("open");
}

/*****   SECTION CHOICE   *****/

// opacity control

function choiceOneblocOpacity() {
    this.choiceOnebloc.style.opacity = "1";
    this.choiceTwobloc.style.opacity = "0.7";
}

function choiceTwoblocOpacity() {
    this.choiceOnebloc.style.opacity = "0.7";
    this.choiceTwobloc.style.opacity = "1";
}

/*****   FIN CHOICE   *****/

/*****   Ecouteur d'évennement au chargement de la page  *****/
window.addEventListener("load", () => {

    isMobile = window.innerWidth <= 1024;

    window.addEventListener("resize", () => {
        isMobile = window.innerWidth <= 1024;
    });


/*****   Ecouteur d'évennement pour le menu  *****/

    const menu = document.getElementById("nav");

    const buttonOpen = document.getElementById("buttonO");
    const buttonClose = document.getElementById("buttonC");

    buttonOpen.addEventListener("click", (e) => menuOpen(menu));
    buttonClose.addEventListener("click", (e) => menuClose(menu));

//////////////////////////////////////////////////////////////////
        
/*****   Ecouteur d'évennement les choix  *****/

    let choiceOnebloc = document.getElementById("choiceOne");
    let choiceTwobloc = document.getElementById("choiceTwo");
    let choiceOneText = document.getElementById("choiceOneText");
    let choiceTwoText = document.getElementById("choiceTwoText");
    let or = document.getElementById("or");
    let nextChoice = document.getElementById("nextChoice");
    let loading = document.getElementById("loading");
/***   REVERSE OPACITY ON BLOC  ***/

    const listener = choiceOneblocOpacity.bind({choiceOnebloc, choiceTwobloc});
    const listener2 = choiceTwoblocOpacity.bind({choiceOnebloc, choiceTwobloc});

    choiceOnebloc.addEventListener("mouseover", listener);
    choiceTwobloc.addEventListener("mouseover", listener2);

//////////////////////////////////////////////////////////

/***   Revelate Bloc Share & Vote purcentage  ***/



//////////////////////////////////////////////////////////


    // choice 1
    choiceOneText.addEventListener("click", () => {

        choiceTwobloc.removeEventListener("mouseover", listener2); //opacity remove

        nextChoice.style.opacity = "1";

        nextChoice.addEventListener("click", () => {

            loading.style.transform = "translateY(0%)";
        });

        
        if(isMobile)
        {
            or.style.height = "20%";
            choiceOnebloc.style.height = "100%";
        }else{
            or.style.marginLeft = "23%";
            choiceOnebloc.style.width = "80%";
        }


    });

    // choice 2
    choiceTwoText.addEventListener("click", () => {

        choiceOnebloc.removeEventListener("mouseover", listener); //opacity remove

        nextChoice.style.opacity = "1";

        if(isMobile)
        {
            or.style.height = "-20%";
            choiceTwobloc.style.height = "100%";
        }else{
            or.style.marginLeft = "-23%";
            choiceTwobloc.style.width = "80%";
        }
        
    });
});