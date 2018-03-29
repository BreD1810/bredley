<!DOCTYPE html>
<html lang="en">

<?php
include '/var/www/include.php';
RenderHead('Contact');
?>

<body>
<?php
RenderNav('contact')
?>

<div class="container">
    <h2>Contact Me</h2>
    <form class="form-horizontal" action="https://formspree.io/bradleybredgarrod@gmail.com" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Your Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Enter your name here." name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Your Email:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" id="email" placeholder="Enter your Email here." name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="msg">Your Message:</label>
            <div class="col-sm-10">          
                <textarea class="form-control" id="message" name="message" placeholder="Enter your message here." rows="5"></textarea>
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>

</body> 

</html>
