<!-- How to disable submit button until form is filled in jquery
How to disable submit button until form is filled in jquery


In this tutorial, you will learn how to disable or enable a form submit button using  jquery. 
We are disabling the submit button when if the input fields is empty. If input fields are not empty, 
then your submit button will be enabled and you can submit your form.

Demo given below: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Disable/enable the form submit button in jQuery</title>
</head>
<body>
<?php include_once('header.php');?>
<div class="container">    

    <form action="" method="post">
        <input type="text" id="firstname" placeholder="First Name" /> <br/><br/>
        <input type="text" id="lastname" placeholder="Last Name"/> <br/><br/>
        <button type="submit" id="btn">Submit</button>

    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#btn').prop('disabled', true);

            $('#firstname, #lastname').keyup(function(){

                if ($('#firstname').val() != '' && $('#lastname').val() != '')
                {
                    $('#btn').prop('disabled', false);
                }
                else
                {
                    $('#btn').prop('disabled', true);
                }

            });

        });
    </script>
</div>

</body>
</html>