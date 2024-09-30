<!-- How to add html tag in div using jquery
How to add html code in div tag using jquery
In this tutorial, you will learn how to add html code in div tag using jquery.
We will be using jQuery append() method or html() method to add the html code in div tag in jquery as given below example:
Syntax:
$(selector).append( code )
$(selector).html( code ) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>How to add text in p tag using jquery</title>
</head>
<body>
<?php include_once('header.php');?>

    <div id="append"></div>
    <div id="html"></div>
    <button type="button" id="btn">Click Me</button>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#btn').click(function (e) {
                e.preventDefault();
                var c = '<div> I am div with append() <h5>I am Heading</h5> <p>I am para</p> <hr/> </div>';
                $('#append').append(c);  //html() Method
                var c = '<div class="bg-warning"> I am div with html() <h5>I am Heading</h5> <p>I am para</p> <hr/> </div>';
                $('#html').html(c); //html() Method
            });
        });
    </script>
</body>
</html>