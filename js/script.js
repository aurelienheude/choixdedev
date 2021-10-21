/*******************************   BOUTON MENU   *******************************/
const menuOpen = (menu) => {
    menu.classList.add("transition_menu");
    menu.classList.add("open");
}

const menuClose = (menu) => {
    menu.classList.remove("open");
}

/*****   SECTION CHOICE   *****/


/*****   Ecouteur d'évennement   *****/
window.addEventListener("load", () => {
    const menu = document.getElementById("nav");

    const buttonOpen = document.getElementById("buttonO");
    const buttonClose = document.getElementById("buttonC");

    buttonOpen.addEventListener("click", (e) => menuOpen(menu));
    buttonClose.addEventListener("click", (e) => menuClose(menu));

//////////////////////////////////////////////////////////////////////////////

    const choiceOnebloc = document.getElementById("choiceOne");
    const choiceTwobloc = document.getElementById("choiceTwo");   

    choiceOnebloc.addEventListener("mouseover", () =>{
        choiceOnebloc.style.opacity = "1";
        choiceTwobloc.style.opacity = "0.7";
    });

    choiceTwobloc.addEventListener("mouseover", () =>{
        choiceTwobloc.style.opacity = "1";
        choiceOnebloc.style.opacity = "0.7";
    });
});