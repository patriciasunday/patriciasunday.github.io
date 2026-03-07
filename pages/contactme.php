<!--
Code written by Patricia Sunday
Purpose: this is the contact form page for my portfolio
-->
<!DOCTYPE html>
<!--using h-full to allow child <body> element to span full screen height-->
<html lang="en" class="h-full">
    <head>
        <title>Contact Me</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Contact form for portfolio">
        <meta name="keywords" content="connect, portfolio, contact, contact me, message, email, form">
        <link rel="stylesheet" href="/styles/output.css">
        <script src="/scripts/contact-me.js" defer></script>
    </head>
    <body class=" h-full flex flex-col text-[var(--text-color)]">
        <header class="m-8 flex flex-col gap-6">
            <div class="self-center"><?php require "nav.php"; ?></div>
            <!--form title header group-->
            <div class="flex flex-col gap-3">
                <div class="flex flex-row justify-between mt-5">
                    <h1 class="text-xl font-bold">Pin Your Message!</h1>
                    <input type="submit" form="contact" class="px-10 rounded-xl bg-[var(--primary-contrast)] text-[var(--bg-color)] font-bold active:bg-[var(--text-color)]">
                </div>
                <hr>
            </div>
        </header>
        <main class="m-8 mt-0 grow">
            <!--contact form (name, email, message)-->
            <form id="contact" class="flex flex-col md:flex-row gap-6">
                <div id="file-upload" class="relative input-flex bg-[var(--primary-color)] w-100 rounded-4xl justify-center items-center py-4 cursor-pointer transition-all hover:opacity-80 hover:scale-[1.02] overflow-hidden">
                    <label for="file" class="cursor-pointer">
                        <img src="../media/fileupload.png" alt="File upload symbol" class="w-10 m-auto">
                        <span style="font-weight: 600">Choose a file to upload</span>
                    </label>
                    <input type="file" id="file" form="contact" class="hidden">
                </div>
                <!--form text input section-->
                <!--flex-grow to expand into available page width-->
                <div class="input-flex gap-5 grow">
                    <div class="input-flex">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" class="input-border" required>
                    </div>
                    <div class="input-flex">
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject" class="input-border" required>
                            <option>Inquiry</option>
                            <option>Feedback</option>
                            <option>Offer</option>
                            <option>Freelancing</option>
                        </select>
                    </div>
                    <div class="input-flex">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Enter your message" class="input-border min-h-40" required></textarea>
                    </div>
                </div>
            </form>
        </main>
        <?php require "footer.php"; ?>
    </body>
</html>