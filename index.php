<!DOCTYPE html>
<html lang="en">

<?php
include '/var/www/html/include.php';
RenderHead('Home', 'Homepage for Bradley Garrod');
?>

<body>

<?php
RenderNav('home')
?>

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
<img src="/images/me.png" alt="Bradley Garrod" style="height: 350px; width: auto; text-align: center;">
<main role="main" class="inner cover">
    <h1 class="cover-heading">Bradley Garrod</h1>
    <p class="lead" style="font-family: 'Roboto', serif; font-size: 20px;">
    I am a second year Computer Science Student at the University of Southampton, working on a variety of projects in multiple languages, such as Java, C# and Haskell.
    I am currently working for RepairLabs, completing repairs on a variety of electronic devices.
    In my free time, I enjoy competitive E-Sports, most notably winning the mid division without losing a single game in Team Fortress 2's European league. I also enjoy fishing, jogging and cycling.
    </p>
</main>
</div>

</body>

</html>
