<!--
Code written by Patricia Sunday
Purpose: this is the resume page for my portfolio
-->

<!DOCTYPE html>
<html lang="en" class="h-full">
    <head>
        <title>Resume</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Resume page  for portfolio">
        <meta name="keywords" content="resume, cv, portfolio, programming">
        <link rel="stylesheet" href="/styles/output.css">
    </head>
    <body class="min-h-full flex flex-col">
        <header class="mt-8 flex flex-col items-center"> 
            <?php require "nav.php";?> 
            <p class="mt-5 italic">Click my name to download the full resume</p>
        </header>
        <main class="grow m-8 p-8 flex flex-col border-2 border-[var(--text-color)] rounded-xl shadow-xl">
            <div class="self-center flex flex-col">
                <a href="../media/resume.pdf" download class="self-center hover:text-[var(--primary-contrast)]">
                    <p class="text-2xl font-extrabold underline">Patricia Sunday</p>
                </a>    
                <p class="self-center">(226)-698-6622</p>
                <p class="self-center">patriciasnsunday@outlook.com</p>
            </div>
            <p class="mt-4">
                I'm a 4th-term student with a strong interest in application and web development.
                I am available for a 4 month internship starting Mid-May 2026, and looking forward to 
                growing my technical and soft skills in a professional setting!
            </p> 
            <div class="md:flex md:gap-10"> <!--for responsive layout-->
                <div class="mt-4">
                    <p class="font-bold">Computer Programming and Analysis</p>
                    <p>Advanced Diploma &nbsp; 2024 - Present (3 years)</p>
                    <ul class="ml-5 list-disc">
                        <li>Algonquin College, Ottawa,Ontario</li>
                        <li>Dean's Honours List; 3.8/4.0</li>
                    </ul>
                </div>
                <div class="mt-4"> 
                    <p class="font-bold">Current Course-Load</p>
                    <ul class="ml-5 list-disc">
                        <li>Object-Oriented Programming with Design Patterns (Java/SQL III)</li>
                        <li>Mobile GUI Programming</li>
                        <li>Business Intelligence and Data Analytics</li>
                        <li>Network Programming</li>
                        <li>Systems Analysis and Design (Agile)</li>
                    </ul>
                </div>
            </div>
        </main>
        <?php require "footer.php"; ?>
    </body>
</html>