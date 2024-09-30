<!-- 
How to get value from input field in jquery
How to Get the Value from Input Text Box using jQuery


In this tutorial, you will be learning that how to get value from input field using jQuery.

So, We can simply use the jQuery val() method to get the value from the given input text box.

Lets, follow the below given example and then click the "Show Data" button, it will display the result in an alert dialog box and console log.

Syntax: 

$(selector).val()

Example: -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>jQuery Tutorials</title>
</head>

<body>
    
<?php include_once('header.php');?>

    <div>
        <label>Enter the Value</label><br />
        <input type="text" id="myInputValue" />

        <button type="button" id="myShowBtn">Show Data</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#myShowBtn').click(function (e) {
                e.preventDefault();

                var str = $('#myInputValue').val();

                alert(str);
                console.log(str);

            });

        });
    </script>
</body>

</html>