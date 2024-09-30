<!-- How to get the value of div content using jQuery
How to get the value of div content using jQuery


In this tutorial, you will be learning how to get the value of div content using jquery.

We are going to Get the value with jQuery text() method and html() method as given below example: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>How to get value of div content using jQuery</title>
</head>
<body>

    <?php include_once('header.php');?>
    
    <div id="divC">
        This is a default div Tag
        <h5>This is a Heading Tag</h5>
        <p>This is a paragrah Tag</p>
    </div>

    <button type="button" id="btn">Click Me</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#btn').click(function (e) {
                e.preventDefault();

                var div_content_text = $('#divC').text(); //text() Method
                alert(div_content_text);

                var div_content_html = $('#divC').html(); //html() Method
                alert(div_content_html);

            });

        });
    </script>
</body>
</html>