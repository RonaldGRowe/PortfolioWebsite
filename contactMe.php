
<?php

if($_POST["submit"]) {
    $recipient="ronaldgilesrowe@gmail.com";
    $subject="Contact Me Response";
    $sender=$_POST["name"];
    $senderCompany=$_POST["company"]
    $senderEmail=$_POST["email"];
    $message=$_POST["response"];

    $mailBody="Name: $sender\nCompany: $senderCompany\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html>

    <!--Ron's Portfolio
        Portfolio|Contact Me
        Author: Ronald Rowe
        Date: 04/05/2020
        Filename: contactMe.html
    -->

    <head>
    <link rel="shortcut icon" href="Images/code4.jpg">
        <title>Ron's Portfolio</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Styles/layout2.css" type="text/css"/>
    </head>

    <body>
        <header>

            <div class="headerimage">
                <a href="index.html"><img src="Images/RonLogo3.png" alt="Ron's Portfolio" /></a>
            </div>
            
            <nav class="navigation">
                <ul>
                    <li><a href ="aboutMe.html">About Me</a></li>
                    <li><a href ="projects.html">Projects</a></li>
                    <li><a class="current" href ="contactMe.html">Contact Me</a></li>
                </ul>
            </nav>

            <ul class="icon">
                <li><a href="https://linkedin.com/in/ronald-rowe-83a16440/" target="_blank"><img src="Images/linkedIn_icon.png" alt="LinkedIn" /></a></li>
                <li><a href="https://github.com/RonaldGRowe?tab=repositories" target="_blank"><img src="Images/gitHub_icon1.png" alt="GitHub"  /></a></li>
            </ul>

        </header>        
        <section>
            <form action="post" action="contactMe.php">
                <label for="name">*Contact Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter Full Name" required>
                <label for="company">Company Name:</label>
                <input type="text" id="company" name="company" placeholder="Company Name">
                <label for="email">*E-mail Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter E-mail Address" required>
                <label for="response">Response</label>
                <textarea name="response" id="response" cols="30" rows="10"></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
        <footer>
            <p>Built and I guess you could call it designed all by Ronald Rowe</p>  
        </footer>
    </body>
</html>    