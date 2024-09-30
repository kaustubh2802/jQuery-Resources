<!-- How to disable right click using jQuery ?
How to disable right click on web page using jQuery ?


In this tutorial, you will see how to disable right click button on browser using jquery. Disable Right Click on Website Using JQuery.

.bind() method and contextmenu event are used for this purpose.

we have used .bind() method for attaching contextmenu event handler with document. The contextmenu event fires when the user right clicks on element. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>How to disable right click using jQuery</title>
</head>
<body>
    <?php include_once('header.php');?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $(document).bind("contextmenu",function(event){
                alert('Right Click is Disabled');
                return false;
            });

        });
    </script>

</body>
</html>