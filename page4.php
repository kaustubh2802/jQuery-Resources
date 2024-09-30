<!-- How to add text in p tag using jquery
How to add text in p tag using jquery


In this tutorial, you will be learning how to add a text in html p tag using  jquery.

We are going to Set Content using jQuery text() method as given below example. 

Syntax:

$(selector).text( str )

Example: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>How to add text in p tag using jquery</title>
</head>
<body>
    
<?php include_once('header.php');?>

    <div>
        
        <p id="p">  </p>

        <button type="button" id="btn">Click to Add</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#btn').click(function (e) {
                e.preventDefault();

                var paragragh = "Hello, I am funda of web IT. We provide online web tutorials";

                $('#p').text(paragragh);

            });

        });
    </script>
</body>
</html>