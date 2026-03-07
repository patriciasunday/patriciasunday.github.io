/*
Author: Patricia Sunday
Purpose: javascript file for contact me page
*/

window.onload = function () {
    // build mailto url with form input contents as body
    document.getElementById("contact").addEventListener("submit", function (e) {
        e.preventDefault();

        const firstName = document.getElementById("firstname").value;
        const lastName  = document.getElementById("lastname").value;
        const subject   = document.getElementById("subject").value;
        const message   = document.getElementById("message").value;

        const body = `Hi Patricia,\nMy name is ${firstName} ${lastName}. ${message}`;

        window.location.href = `mailto:patriciasnsunday@outlook.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    });
};
