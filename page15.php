<!-- How to reload a div without reloading the entire page?
How to reload or refresh a div without reloading the entire page using jquery


In this tutorial, you will be learning how can we refresh a DIV without reloading the whole page.

Now, Let's refresh a div content using  jquery without any page reload on a Button Click. jQuery.load() method is probably the easiest way to load data asynchronously using a selector, but you can also use any of the jquery ajax methods (get, post, getJSON, ajax, etc.)

Note that load allows you to use a selector to specify what piece of the loaded script you want to load, as in given below:

$("#myMainDiv").load(location.href + " #myRefreshDiv");
Example 1:  Let's create a index.php and print the TIME using date() function in a "<div>" tag and reload this div without page reload or refresh, using jquery. We will be using jQuery setInterval() method to call that load() method to refresh div content every 1 second as given below: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reload Div Content without reloading the page using jQuery</title>
</head>
<body>
    <?php include_once('header.php');?>
    <div class="container">

        <h3>Time: <?= date('H:i:s') ?></h3>

        Live Time:<div id="myMainDiv">
             <h4 id="myRefreshDiv"><?= date('H:i:s') ?></h4>
        </div> 
    
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            setInterval( function() {
                $("#myMainDiv").load(location.href + " #myRefreshDiv");
             }, 1000 );

        });
    </script>

</body>
</html>