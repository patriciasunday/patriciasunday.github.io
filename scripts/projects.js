/*
Author: Patricia Sunday
Purpose: javascript file for projects page in portfolio
*/

//execute script once window loads
window.onload = function () {
    let projectsShown = 0; //to store amount of projects to be shown on screen
    let currentProjectIndex = 0; //initializing current project index as first project index in array
    const backButton = document.getElementById("back");
    const forwardButton = document.getElementById("forward");
    const projects = document.getElementsByClassName("project"); //to store all projects as elements in array

    //to change amount of projects to be shown based on page width
    function updateProjectsShown(){
        let pageWidth = window.innerWidth;

        if (pageWidth<800){
            projectsShown = 1;
        }
        else{
            projectsShown = 2;
        }
    }
    updateProjectsShown();

    //to update project view based on current project index and amount of projects to show
    function updateView(){
        //iterating through projects
        for (let i=0; i<projects.length; i++){
            //only show project if its between current project index(inclusive) and projects shown range
            if(i>=currentProjectIndex && i<(currentProjectIndex + projectsShown)) {
                projects[i].style.display = "block";
            } else {
                projects[i].style.display = "none";
            }
        }
    }

    //to decrement current project index
    function decrementCurrentProjectIndex(){
        if (currentProjectIndex>0){
            currentProjectIndex--;
            updateView();
        }
    }

    //to increment current project index
    function incrementCurrentProjectIndex(){
        if (currentProjectIndex<projects.length - projectsShown) {
            currentProjectIndex++;
            updateView();
        }
    }

    //to update current project index depending on button clicked
    backButton.addEventListener("click", decrementCurrentProjectIndex);
    forwardButton.addEventListener("click", incrementCurrentProjectIndex);

    // enable detail toggling on each project, swapping image with details
    for (let i=0; i<projects.length; i++){
        projects[i].classList.add("cursor-pointer"); // denote clickability on project using pointer
        projects[i].addEventListener("click", function (){
            const img = projects[i].querySelector(".project-img");
            const details = projects[i].querySelector(".project-details");
            img.classList.toggle("hidden");
            details.classList.toggle("hidden");
        });
    }

    //to update projects when window is resized
    window.addEventListener("resize", () =>{  
        updateProjectsShown();
        updateView();
    });

    //update project view on load
    updateView();
};
