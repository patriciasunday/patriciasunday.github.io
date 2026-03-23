
/*
Author: Patricia Sunday
Purpose: injecting relative nav and footer into each page
*/



document.addEventListener('DOMContentLoaded', function () {
    // check if current page is in pages folder (e.g. contactme.html) or at proj root (i.e. index.html)
    const isInPages = window.location.pathname.includes('/pages/');
    // set base according to location to navigate back to proj root
    const base = isInPages ? '../' : ''; 

    // set nav links using base for root path
    const navHTML = `<nav class="flex flex-row gap-3 text-[var(--text-color)] text-sm font-bold">
        <a href="${base}index.html" class="nav-activity">Home</a>
        <a href="${base}pages/resume.html" class="nav-activity">Resume</a>
        <a href="${base}pages/projects.html" class="nav-activity">Projects</a>
        <a href="${base}pages/contactme.html" class="nav-activity">Contact Me</a>
    </nav>`;

    // set universal footer
    const footerHTML = `<footer class="flex justify-between py-5 px-8 md:px-12 text-sm bg-[var(--primary-contrast)] text-[var(--bg-color)] border-t-2 border-[var(--subtitle-color)]">
        <p>Copyright &copy; 2025 Patricia Sunday. All Rights Reserved</p>
        <div class="flex gap-5">
            <a href="https://www.linkedin.com/in/patricia-sunday" class="footer-image"><img src="${base}media/linkedinlogo.png" alt="LinkedIn logo"></a>
            <a href="https://github.com/patriciasunday" class="footer-image"><img src="${base}media/githublogo.jpg" alt="GitHub logo"></a>
            <a href="mailto:patriciasnsunday@outlook.com" class="footer-image"><img src="${base}media/emailsymbol.png" alt="Email symbol"></a>
        </div>
    </footer>`;

    const navEl = document.getElementById('nav-placeholder');
    const footerEl = document.getElementById('footer-placeholder');

    // inject nav & footer into page
    if (navEl) navEl.outerHTML = navHTML;
    if (footerEl) footerEl.outerHTML = footerHTML;
});
