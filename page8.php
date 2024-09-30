<!-- How to remove the div or element using jquery
Remove div tag or html element using jquery

In this tutorail, you will be learning how to remove the div tag or html element using jQuery.
We will be using jQuery remove() method to remove that exact html element using jQuery as given below example: -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>How to remove the div or element using jquery</title>
</head>
<body>
    <?php include_once('header.php');?>
    <div id="dv" class="bg-danger">
        <h4>Hello Guys, You are going to remove this div</h4>
        <p>This is a paragraph</p>
    </div>

    <button type="button" id="bt">Click to remove</button>
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $("#bt").click(function() {  

                $("#dv").remove();  

            });

        });
    </script>
    
</body>
</html>