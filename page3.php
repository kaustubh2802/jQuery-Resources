<!-- How to do Form input box validation using jquery
How to do Form input box validation using jquery


In this tutorial, you will be learning how to do form validation or textbox validation using jquery.

We will be using jQuery trim() method and val() method to do the validation in jquery.

You will be seeing that, when you click the "Submit Button", then it will be validating the input box, if the input box is empty or has a blank spaces, it will return with error message by focus on that specific input box with RED Bordered and also an alert dialog box as "All fields are mandetotry" as given in below example.

Syntax:

This is trim() method systax:

jQuery.trim( str )   OR   $.trim( str )

This is val() method syntax:

$(selector).val()

Example: -->
++++
<!DOCTYPE html>
<html lang="en">
<head>
    <title>How to do Form input box validation using jquery</title>
</head>
<body>
    
<?php include_once('header.php');?>

    <div>

        <label>First Name:</label>
        <input type="text" id="firstname" /> <br/>

        <label>Last Name:</label>
        <input type="text" id="lastname" /> <br/>

        <label>Course:</label>
        <input type="text" id="course" /> <br/>

        <label>Section:</label>
        <input type="text" id="section" /> <br/>

        <button type="button" id="submit">Submit</button>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#submit').click(function (e) {
                e.preventDefault();

                var isValid = true;

                $('#firstname,#lastname,#course,#section').each(function () {
                    if ($.trim($(this).val()) == '') {

                        isValid = false;
                        $(this).css({"border": "1px solid red","background": "#FFCECE"});
                    }
                    else {
                        $(this).css({"border": "","background": ""});
                    }
                });

                if (isValid == false){
                    alert("All fields are mandetory");
                }
                else{
                    // Your code here
                    alert("Your Done with validation");
                }

            });
        });
    </script>
</body>
</html>