let isOpen = false;

function handleHamburgerClick() {
    let closedHamBurgerIcon = document.querySelector(".hamburger > .closedIcon");
    let openedHamBurgerIcon = document.querySelector(".hamburger > .openedIcon");
    let navItemContainer = document.querySelector(".navbar > .navItemContainer");

    if (isOpen) {
        closedHamBurgerIcon.style["display"] = "none";
        openedHamBurgerIcon.style["display"] = "block";
        navItemContainer.style["display"] = "flex";
        navItemContainer.style["flex-direction"] = "column";
    }

    if (!isOpen) {
        closedHamBurgerIcon.style["display"] = "block";
        openedHamBurgerIcon.style["display"] = "none";
        navItemContainer.style["display"] = "none";
        if (window.matchMedia("(min-width: 768px)").matches) {
            navItemContainer.style["display"] = "flex";
        }
    }
}

let dropdownNavItems = document.querySelectorAll(".dropdownContainer");
for (let x of dropdownNavItems) {
    let dropdown = x.querySelector(".subNavItemContainer");
    x.addEventListener("mouseenter", () => {
        dropdown.style["width"] = "100%";
        dropdown.style["display"] = "flex";
        dropdown.style["top"] = "100%";
        dropdown.style["left"] = "0";
        dropdown.style["height"] = "fit-content";
        if(window.matchMedia("(min-width: 768px)").matches){
            dropdown.style["position"] = "absolute";
        }
    });
    x.addEventListener("mouseleave", () => {
        dropdown.style["overflow"] = "hidden";
        dropdown.style["display"] = "none";
        dropdown.style["height"] = "0";
    });
    x.addEventListener("click", () => {

    });
}

let hamBurger = document.querySelector(".hamburger");
hamBurger.addEventListener("mousedown", () => {
    isOpen = !isOpen;
    handleHamburgerClick(isOpen);
});
handleHamburgerClick((isOpen));