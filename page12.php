<!-- How to remove closest div element on click using jquery
How to remove closest div element on click using jquery
In this tutorial, you will be learning how to remove the closest element of div on click using  jquery.
We will be using jquery remove() method to remove the closest div tag as given in below example. -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <title>How to remove closest div element on click using jquery</title>
</head>
<body>
<?php include_once('header.php');?>
    <div class="cart-container">

        <div class="products">
            <div>
                <h5>Mobile</h5>
            </div>
            <div>
                <button type="button" class="myRemoveButton">Remove</button>
            </div>
        </div>
        <div class="products">
            <div>
                <h5>Laptop</h5>
            </div>
            <div>
                <button type="button" class="myRemoveButton">Remove</button>
            </div>
        </div>
        <div class="products">
            <div>
                <h5>Desktop</h5>
            </div>
            <div>
                <button type="button" class="myRemoveButton">Remove</button>
            </div>
        </div>
        <div class="products">
            <div>
                <h5>Accessories</h5>
            </div>
            <div>
                <button type="button" class="myRemoveButton">Remove</button>
            </div>
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".myRemoveButton").click(function() {  

                $(this).closest('.products').remove();
                alert('Removed Successfully')

            });

        });
    </script>

</body>
</html>