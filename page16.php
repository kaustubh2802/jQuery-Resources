<!-- How to disable or enable form submit button in jQuery ?
How to disable or enable form submit button in jQuery ?


In this tutorial, you will learn how to Disable/enable the form submit button.

Disable the submit button until the visitor has clicked a check box. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Disable/enable the form submit button in jQuery</title>
</head>
<body>
    <?php include_once('header.php');?>
    <div class="container">
    <form action="" method="post">

        <input type="checkbox" name="agree" id="agree" /> I accept <br>
        <button type="submit" id="mySubmitButton">Submit</button>

    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#agree').click(function() {

                if ($('#mySubmitButton').is(':disabled')) {
                    $('#mySubmitButton').removeAttr('disabled');
                } else {
                    $('#mySubmitButton').attr('disabled', 'disabled');
                }

            });

            $('#mySubmitButton').click(function() {
                alert('You have submitted the error!');
            });

        });
    </script>

</body>
</div>
</html>