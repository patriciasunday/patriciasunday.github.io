
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
    const footerHTML = `<footer class="flex justify-between items-center py-3 px-8 md:px-12 text-sm bg-[var(--primary-contrast)] text-[var(--bg-color)] border-t-2 border-[var(--subtitle-color)]">
        <p class="text-base">Copyright &copy; 2025 Patricia Sunday. All Rights Reserved</p>
        <div class="flex gap-5">
            <a href="https://www.linkedin.com/in/patricia-sunday" class="footer-image"><img src="${base}media/linkedin-logo.png" alt="LinkedIn logo"></a>
            <a href="https://github.com/patriciasunday" class="footer-image"><img src="${base}media/github-logo.svg" alt="GitHub logo"></a>
            <a href="mailto:patriciasnsunday@outlook.com" class="footer-image"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="rgb(255, 255, 255)" d="M320 128C214 128 128 214 128 320C128 426 214 512 320 512C337.7 512 352 526.3 352 544C352 561.7 337.7 576 320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320L576 352C576 405 533 448 480 448C450.7 448 424.4 434.8 406.8 414.1C384 435.1 353.5 448 320 448C249.3 448 192 390.7 192 320C192 249.3 249.3 192 320 192C347.9 192 373.7 200.9 394.7 216.1C400.4 211.1 407.8 208 416 208C433.7 208 448 222.3 448 240L448 352C448 369.7 462.3 384 480 384C497.7 384 512 369.7 512 352L512 320C512 214 426 128 320 128zM384 320C384 284.7 355.3 256 320 256C284.7 256 256 284.7 256 320C256 355.3 284.7 384 320 384C355.3 384 384 355.3 384 320z"/></svg></a>
        </div>
    </footer>`;

    const navEl = document.getElementById('nav-placeholder');
    const footerEl = document.getElementById('footer-placeholder');

    // inject nav & footer into page
    if (navEl) navEl.outerHTML = navHTML;
    if (footerEl) footerEl.outerHTML = footerHTML;
});
