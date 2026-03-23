/*
Author: Patricia Sunday
Purpose: flip card functionality for index board cards
*/

const imageCards = document.getElementsByClassName("image-card");
const textCards = document.getElementsByClassName("text-card");

window.onload = function (){

    // to initially set image cards for display
    for(let i = 0; i<imageCards.length; i++){
        currentImage = imageCards[i];
        currentImage.style.display = "block"
    }

    // flip card functionality
    for(let i = 0; i<imageCards.length; i++){
        let currentImage = imageCards[i];
        let currentText = textCards[i];

        // flip away image
        currentImage.addEventListener("click", () => {
            if(currentImage.style.display === "block"){
                currentImage.style.display = "none";
                currentText.style.display = "block";
            }
        });

        // flip away text
        currentText.addEventListener("click", () => {
            if(currentText.style.display === "block"){
                currentText.style.display = "none";
                currentImage.style.display = "block";
            }
        });
    }
}