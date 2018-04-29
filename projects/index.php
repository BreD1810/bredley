<!DOCTYPE html>
<html lang="en">

<?php
include '/var/www/html/include.php';
RenderHead('Projects', 'Projects completed by Bradley Garrod.');
?>

<body>
<?php
RenderNav('projects');
?>

<div class="container">
    <h2>My Projects</h2>
    <div style="text-align: center;">
        <p class="lead" style="text-align: center;">Currently I have a wide range of projects in a variety of languages. To view them, click the button below</p>
        <a class = "btn btn-lg btn-primary" href="http://github.com/BreD1810" role="button" style="text-align: center;">Go to my GitHub</a>
    </div>
    <br>
    <?php
    RenderProject("CampusHack 2018", "CampusHack was a 24 hour hackathon hosted at the University of Southampton in March 2018. 
    Alongside Samuel Collins, Joel T. Parkinson and Ankur Sharma, I helped to develop a prototype for \"LabView\". This was a 
    website designed to display which PCs were logged in on the Level 3 labs of Zepler, so that you would know if it was worth 
    walking to the labs.", "https://github.com/BreD1810/CampusHack-2018", "CampusHack's Code");
    
    RenderProject("Connect 4", "In collaboration with Samuel Collins and Joel T. Parkinson, I have helped to produce a Connect 4 
    game. Originally, this began as a simple C# console application. However, it is now being expanded to a Universa Windows Platform 
    app. In the future, it will also become a mobile app built with Xamarin.", "https://github.com/GUIs-Are-For-the-Weak/Connect4", "Connect 4's Code");

    RenderProject("Discord Bots", "I have created a series of Discord bots. In general, these are written in Python, and provide additional information 
    when a user enters a link to the server, similar to the preview provided for certain sites.", "https://github.com/BreD1810/Discord-Bots", "Bots");

    ?>
</div>

</body> 

</html>
