<!--
Code written by Patricia Sunday
Purpose: this is the projects page for my portfolio
-->
<!DOCTYPE html>
<html lang="en" class="h-full">
    <head>
        <title>Projects</title>
        <meta charset="UTF-8">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Resume page  for portfolio">
        <meta name="keywords" content="resume, cv, portfolio, programming">
        <link rel="stylesheet" href="/styles/output.css">
        <script src="/scripts/projects.js" defer></script>
    </head>
    <body class="flex flex-col h-full text-[var(--text-color)]">
       <header class="m-8 flex flex-col gap-3">
            <div class="self-center"><?php require "nav.php"; ?></div>
            <hr class="mt-5">
            <p class="self-center italic">Click project to view or collapse details</p>
        </header>
        <main class="grow m-8 flex gap-15 self-center">
            <button id="back" class="bg-[var(--primary-color)] h-10 w-15 rounded-xl self-center text-[var(--text-color)] font-extrabold cursor-pointer transition-all hover:brightness-125 hover:scale-105 active:scale-90">&lt;</button>
            <!--project 1-->
            <div class="project border border-[var(--text-color)] rounded-2xl h-90 ">
                <img src="../media/techreport.png" alt="Letter of intent for the report" class="project-img w-100 h-75 object-cover rounded-t-2xl border-b border-[var(--text-color)]">
                <ul class="project-details list-disc list-inside hidden w-100 h-75 overflow-y-auto border-b border-[var(--text-color)] p-6 space-y-3">
                    <li class="list-none">Technical Communication-Engineering Technology (ENL2019T), Ottawa, ON</li>
                    <li>Compiled a 10+ page report on Visible Infrared Imaging Radiometer Suite (VIIRS) as a solution for wildfire prevention in California</li>
                    <li>Conducted thorough research using credible sources to support and generate key report statements</li>
                    <li>Utilized Word features, such as Citations & Bibliography, Table of Contents, and Captions for efficient document navigation</li>
                    <li>Concluded on a well-supported recommendation using step-by-step analysis based on crucial criteria for VIIRS</li>
                </ul>
                <p class="project-title text-center font-bold text-lg">Technical Recommendation Report</p>
                <p class="text-center">(Jan - April 2025)</p>
            </div>
            <!--project 2-->
            <div class="project border border-[var(--text-color)] rounded-2xl h-90 max-h-90">
                <img src="../media/fitnesstracker.png" alt="Code for the Fitness Tracker program" class="project-img w-100 h-75 object-cover rounded-t-xl border-b border-[var(--text-color)]">
                <ul class="project-details list-disc list-inside hidden w-100 h-75 overflow-y-auto border-b border-[var(--text-color)] p-6 space-y-3">
                    <li class="list-none">Object-Oriented Programming (CST8284), Ottawa, ON</li>
                    <li>Developed a fitness tracker model using Eclipse IDE for Java Developers</li>
                    <li>Applied encapsulation to ensure data integrity and access control</li>
                    <li>Tested program functionality by designing and executing one test class and three Junit test cases</li>
                    <li>Simulated a real fitness tracker by processing user input and generating relevant personalized information</li>
                </ul>
                <p class="project-title text-center font-bold text-lg">Fitness Tracker Program</p>
                <p class="text-center">(Feb 2025)</p>
            </div>
            <!--project 3-->
            <div class="project border border-[var(--text-color)] rounded-2xl max-h-90">
                <img src="../media/sewingshopmanagement.png" alt="Sewing Shop Management system on Microsoft Access" class="project-img w-100 h-75 object-cover rounded-t-xl border-b border-[var(--text-color)]">
                <ul class="project-details list-disc list-inside hidden w-100 h-75 overflow-y-auto border-b border-[var(--text-color)] p-6 space-y-3">
                    <li class="list-none">Database Systems (CST2355), Ottawa, ON</li>
                    <li>Led a team of three to create a sewing shop management system using SQL Server Management Studio and Microsoft Access</li>
                    <li>Integrated linked database tables into a user-friendly Access application</li>
                    <li>Created user-friendly interfaces through queries, forms, and reports for easier data manipulation</li>
                    <li>Improved database efficiency by establishing entity relationships</li>
                </ul>
                <p class="project-title text-center font-bold text-lg">Sewing Shop Management System</p>
                <p class="text-center">(Feb 2025)</p>
            </div>
            <button id="forward" class="bg-[var(--primary-color)] h-10 w-15 rounded-xl self-center text-[var(--text-color)] font-extrabold cursor-pointer transition-all hover:brightness-125 hover:scale-105 active:scale-90">&gt;</button>
        </main>
        <?php require "footer.php"; ?>
    </body>
</html>