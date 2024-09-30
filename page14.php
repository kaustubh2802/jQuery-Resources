<!-- In the second example, We are using the SetInterval() method to call the .reload() function using jquery.

How to reload page after some time in jQuery -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reload a Page after Interval</title>
</head>
<body>
<?php include_once('header.php');?>
    <div class="container">

        <h4>When you open your web page after 5 seconds it will refresh your page.</h4>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            setInterval( function() { location.reload() }, 2000 );

        });
    </script>

</body>
</html>