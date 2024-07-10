let facultyToggleBtn = document.querySelector(".facultyToggleBtn");
facultyToggleBtn.addEventListener("mousedown", function(){
    let facultyToggleBtnIcon = facultyToggleBtn.querySelectorAll("img");
    if(facultyToggleBtnIcon[0].style["display"] == "none"){
        facultyToggleBtnIcon[0].style["display"] = "block";
        facultyToggleBtnIcon[1].style["display"] = "none";
    }
    else{
        facultyToggleBtnIcon[0].style["display"] = "none";
        facultyToggleBtnIcon[1].style["display"] = "block";
    }

    let facultyGallery = document.querySelector(".facultyGallery");
    if(facultyGallery.style["max-height"] == "200vh"){
        facultyGallery.style["max-height"] = "0";
        facultyGallery.style["padding"] = "0";
    }
    else{
        facultyGallery.style["max-height"] = "200vh";
        facultyGallery.style["padding"] = "1.5rem";
    }
});