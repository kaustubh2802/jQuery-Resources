<!-- How to set value of input field in jQuery
How to set the value of input text field using jQuery


In this tutorial, you will be learning how to set your given value in an input textbox using  jquery.

So, We will be using jquery val() method to set the value inside the input box as given below.

Syntax:

$(selector).val(value)

Example: -->
<?php include_once('header.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>jQuery Tutorials</title>
</head>

<body>

    <div>
        <label>My Name is:</label>
        <input type="text" id="myInputBox" />
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            var input_value = "Funda of Web IT";
            $('#myInputBox').val(input_value);

        });
    </script>
</body>

</html>