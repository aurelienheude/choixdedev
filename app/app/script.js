/*****   Ecouteur d'évennement au chargement de la page  *****/
window.addEventListener("load", () => {

    /*****   Ecouteur d'évennement pour le menu  *****/
    
    const container_content = document.getElementById("container_content");
    const nav = document.getElementById("nav");
    let nav_width = nav.offsetWidth;
    let display = nav.style.display = "flex";

    const toggle_nav = document.getElementById("toggle");

    toggle_nav.addEventListener("click", () => 
    {
        if (nav.style.display == "flex")
        {
            nav.style.display = "none";
            container_content.style.marginLeft = "0";
        }else if(nav.style.display == "none")
        {
            nav.style.display = "flex";
            container_content.style.marginLeft = "13.93%";
        }
    });
});