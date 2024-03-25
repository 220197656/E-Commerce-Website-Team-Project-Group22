function togglePopup(button){
        const popup = document.getElementById("popup-1");
        popup.classList.toggle("active");

        const popupContent = popup.querySelector(".content");

        if (popup.classList.contains("active")) {
            popupContent.style.position = "fixed";
            popupContent.style.top = "50%";
            popupContent.style.left = "50%";
            popupContent.style.transform = "translate(-50%, -50%)";
        } else {
            popupContent.style.position = "";
            popupContent.style.top = "";
            popupContent.style.left = "";
            popupContent.style.transform = "";
        }
    }