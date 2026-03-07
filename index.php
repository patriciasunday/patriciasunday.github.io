<!--
Code written by Patricia Sunday
Purpose: this is the homepage for my portfolio
-->

<!DOCTYPE html>
<!--using h-full to allow child <body> element to span full screen height-->
<html lang="en" class="h-full">
    <head>
        <title>Patricia Sunday Portfolio</title>
        <meta charset="UTF-8">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Homepage for portfolio">
        <meta name="keywords" content="homepage, portfolio, programming, patricia sunday">
        <link rel="stylesheet" href="/styles/output.css">
        <script src="scripts/flip-card.js" defer></script>
    </head>
    <!--using h-full and flex-col so <main> can grow to push footer to bottom of page, regardless of <body> content-->
    <body class="h-full flex flex-col bg-[var(--bg-color)] text-[var(--text-color)]">
        <header class="flex flex-col items-center mt-8 gap-8 mb-30 mx-8">
                <?php require "pages/nav.php"; ?>
                <!--profile header image group-->
                <div class="relative w-full h-98 flex justify-center">
                    <img src="media/profile-background.jpg" alt="Low-angle-shot photograph of a tall tree on a bright sunny day" class="w-full max-w-225 h-75 object-cover rounded-4xl">
                    <img src="media/headshot.png" alt="Circle-shaped picture of myself" class="absolute w-40 rounded-full border-4 border-[var(--primary-color)] top-60">
                </div>
                <!--header title group-->
                <div class="flex flex-col items-center">
                    <h1 class="font-bold text-4xl">Patricia Sunday</h1>
                    <p class="text-center text-lg text-[var(--subtitle-color)] font-medium">Computer Programming and Analysis student in Ottawa, Ontario</p>
                </div>
        </header>
        <main class="grow m-8">
            <!--info board flip-cards group. grid layout for board pics-->
            <div class="flex flex-col md:flex-row justify-center items-center gap-15">
                <!-- personal info section -->
                <section>
                    <!--board card-->
                    <div class="grid grid-cols-4 grid-rows-2 max-w-150 max-h-80 rounded-4xl shadow-md/30 transform hover:-translate-y-1 duration-250 text-sm lg:text-base">
                        <!--text face of card-->
                        <div class="text-card hidden rounded-l-4xl row-span-2 col-span-3 border-r-2 border-[var(--bg-color)] h-full w-full overflow-y-auto">
                            <ul class="list-disc">
                                <li class="list-gap">I'm a programming student and aspiring full-stack developer</li>
                                <li class="list-gap">Currently, I'm self-learning Python to deepen my understanding of software automation and its application in daily life and creative projects</li>
                                <li class="list-gap">
                                    In my free time, I'm likely to be found...
                                    <ul class="list-[circle] pl-5">
                                        <li class="list-gap">Deep into a good book</li>
                                        <li class="list-gap">Enjoying volunteer work with loved ones</li>
                                        <li class="list-gap">Scrolling through Pinterest</li>
                                        <li class="list-gap">Rewatching my favourite shows</li>
                                        <li class="list-gap">Binging TV or playing games with family</li>
                                        <li class="list-gap">Partying or having a night in with friends</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--picture face of card-->
                        <img src="media/me.jpeg" alt="Picture of myself (Patricia)" class="image-card w-full h-full object-cover row-span-2 col-span-3 rounded-l-4xl border-r-2 border-[var(--bg-color)]">
                        <img src="media/greece.jpeg" alt="Sea horizon and trees on Greek island" class="w-full h-full object-cover rounded-tr-4xl border-b-2 border-[var(--bg-color)]">
                        <img src="media/cafe.png" alt="The hands of 3 friends and I, holding out drinks from a cafe" class="w-full h-full object-cover rounded-br-4xl">
                    </div>
                    <h2 class="text-lg font-medium pl-1">about me</h2>
                </section>  

                <!-- college info section -->
                <section>
                    <!--board card-->
                    <div class="grid grid-cols-4 grid-rows-2 max-w-150 max-h-80 rounded-4xl shadow-md/30 transform hover:-translate-y-1 duration-250 text-sm lg:text-base">
                        <!--interactive text face-->
                        <div class="text-card hidden rounded-l-4xl row-span-2 col-span-3 border-r-2 border-[var(--bg-color)] h-full w-full overflow-y-auto">
                            <ul class="list-disc">
                                <li class="list-gap">Currently, I've completed my 3rd term in Algonquin College's School of Advanced Technology</li>
                                <li class="list-gap">The certification I am studying for is the 3-year Advanced Diploma in
                                    <a href="https://www.algonquincollege.com/sat/program/computer-programming-and-analysis/" class="font-medium">Computer Programming and Analysis</a>
                                </li>
                                <li class="list-gap">My studying began in September 2024</li>
                                <li class="list-gap">
                                    For more information about my coursework, visit the
                                    <a href="pages/resume.php" class="font-medium">Resume page</a>
                                </li>
                            </ul>
                        </div>
                        <img src="media/algonquin-ca-building.jpg" alt="Algonquin College Ottawa campus CA building" class="image-card w-full h-full object-cover row-span-2 col-span-3 rounded-l-4xl border-r-2 border-[var(--bg-color)]">
                        <img src="media/algonquin-window.jpg" alt="Photograph of the view from an Algonquin classroom window, featuring parking lot, trees, buildings" class="w-full h-full object-cover rounded-tr-4xl border-b-2 border-[var(--bg-color)]">
                        <img src="media/algonquin-window2.jpg" alt="Photograph of the view from an Algonquin staircase window, featuring parking trees and buildings" class="w-full h-full object-cover rounded-br-4xl">
                    </div>
                    <h2 class="text-lg font-medium pl-1">about my school</h2>
                </section>
            </div>
        </main>
        <?php require "pages/footer.php"; ?>
    </body>
</html>

<!--
todo: add boards for each page (3 more boards total)
-->
