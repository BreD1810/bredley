<?php

function RenderNav($page)
{
	?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/" style="padding-left: 30px; font-size: 30px;">Bradley Garrod</a>
            <a href="/" class="navbar-left"><img src="/images/logo.png"></a>
        </div>
        <ul class="nav navbar-nav">
			<?php
			if($page == "home")
			{
			echo "<li class=\"active\"><a href=\"/\">Home</a></li>
            <li><a href=\"/projects/\">Projects</a></li>
			<li><a href=\"/contact/\">Contact</a></li>";
			} 
			elseif($page == "projects")
			{
				echo "<li><a href=\"/\">Home</a></li>
            	<li class=\"active\"><a href=\"/projects/\">Projects</a></li>
				<li><a href=\"/contact/\">Contact</a></li>";
			}
			elseif($page == "contact")
			{
				echo "<li><a href=\"/\">Home</a></li>
            	<li><a href=\"/projects/\">Projects</a></li>
				<li class=\"active\"><a href=\"/contact/\">Contact</a></li>";
			}
			else
			{
				echo "<li><a href=\"/\">Home</a></li>
            	<li><a href=\"/projects/\">Projects</a></li>
				<li><a href=\"/contact/\">Contact</a></li>";
			}
			?>
        </ul>
    </div>
</nav>
	<?php
}

function RenderHead($Head)
{
	?>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="/images/favicon.ico">
	<title><?php echo $Head ?></title>
	<link type="text/css" rel="stylesheet" href="/stylesheet.css"/>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="/bootstrap.min.css" rel="stylesheet">
</head>
	<?php
}

function RenderProject($Title, $Description, $Link, $Button)
{
	?>
	<div class="jumbotron">
        <h1 style="font-size: 40px; font-family: 'Ubuntu', serif;"><?php echo $Title ?></h1>
        <p style="font-size: 20px; font-family: 'Roboto', serif;"><?php echo $Description ?></p>
        <a class = "btn btn-lg btn-primary" href="<?php echo $Link ?>" role="button">Go to <?php echo $Button ?></a>
    </div>
	<?php
}

?>
