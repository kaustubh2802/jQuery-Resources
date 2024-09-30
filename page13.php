<!-- Here in this tutorial, you will be learning two different methods for refreshing or reloading a page.

In this method, I’ll use a button control and its click event to trigger the page refresh. This is a manual process.

In the second method, I’ll use a timer to trigger refreshing or reloading a page. This is an automatic process.

To achieve this I am using the location.reload() method inside the $(document).ready() function. I have written scripts one each for manual process and for automatic process. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Refresh or Reload a Page manually</title>
</head>
<body>
<?php include_once('header.php');?>
    <div class="container">

        <h4>Click the Button to refresh the page using jquery</h4>
        <button id="myButton">Click Me</button>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $("#myButton").click(function() {  

                location.reload(true);

            });

        });
    </script>

</body>
</html>