<!DOCTYPE html>
<html>
<?php
include '/var/www/html/include.php';
RenderHead('404 - Page not found');
RenderNav('404');
?>

<body>

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <img src="/images/404.png" style="height: 300px; width: auto; text-align: center;">
    <main role="main" class="inner cover">
    <h1 class="cover-heading">404 - Page Not Found!</h1>
    <a class = "btn btn-lg btn-primary" href="/" role="button">Go to the homepage</a>
</main>
</div>

</body>
</html>
