<!-- How to get the closest input value from clicked element using jQuery

In this tutorial, you will be learning how to get closest input value from clicked div element using jQuery,
 where we are having multiple data in div tags and have to get the input value from it. as given below example.
  -->
  <!DOCTYPE html>
<html lang="en">
<head>
    <title>How to get the closest input value from clicked element with jQuery</title>
</head>
<body>
<?php include_once('header.php');?>
    <div class="container">

        <div class="products">
            <label>Product 1:</label>
            <input type="text" name="product_id" value="1" />
            <button type="button" class="myButton">Click Me</button>
        </div>
        <div class="products">
            <label>Product 2:</label>
            <input type="text" name="product_id" value="2" />
            <button type="button" class="myButton">Click Me</button>
        </div>
        <div class="products">
            <label>Product 3:</label>
            <input type="text" name="product_id" value="3" />
            <button type="button" class="myButton">Click Me</button>
        </div>
        <div class="products">
            <label>Product 4:</label>
            <input type="text" name="product_id" value="4" />
            <button type="button" class="myButton">Click Me</button>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".myButton").click(function() {  

                var product_id = $(this).closest('.products').find('input[name="product_id"]').val();
                alert('The Product Id : '+ product_id)

            });

        });
    </script>

</body>
</html>