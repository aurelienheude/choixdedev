function menuOpen()
{
    let menu = document.getElementById('nav');
    let wrapper = document.getElementById('wrapper');

    menuWidth = menu.offsetWidth;

    if(menuWidth == 1)
    {
        menu.style.opacity = 1;
        menu.style.width = "267px";

        wrapper.style.display = "flex";
    }
}

function menuClose()
{
    let menu = document.getElementById('nav');

    menuWidth = menu.offsetWidth;

    if(menuWidth == 267)
    {
        menu.style.opacity = 0;
        menu.style.width = "1px";

        wrapper.style.display = "none";
    }
}