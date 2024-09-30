<!-- How to Add Remove Multiple Input Fields Dynamically using jQuery
Add / Remove Multiple Input Fields Dynamically using jQuery


In this tutorial, you will be learning how to create multiple input fields using jquery, where you will be able to add or remove input box using jquery and we will be using Bootstrap 5 to design the form for better user interface.

Lets begin with given below example to Dynamically add input fields to form using jQuery:

How to Insert multiple data / input fields dynamically with jquery in php mysql. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add / Remove Input Fields Dynamically using jQuery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php include_once('header.php');?>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h4>
                    Product Price
                    <button type="button" id="addMoreButton" class="btn btn-primary float-end">Add More +</button>
                </h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">

                    <div class="add-more-mainForm">

                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label>Selling Price</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Offer Price</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Quantity</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <div class="addRemoveButton">
                                </div>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '#addMoreButton', function () {

                var htmlForm = $(".add-more-mainForm").first().clone();

                $(htmlForm).find(".addRemoveButton").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>Remove</a>");
                $(".add-more-mainForm").last().after(htmlForm);

            });

            $(document).on('click', '.remove', function (e) {
                e.preventDefault();

                $(this).parents(".add-more-mainForm").remove();

            });

        });
    </script>




<!-- ================================= -->
<div class="card">
            <div class="card-header">
                <h4>To Do List</h4>
                    <button type="button" id="addMoreButton" class="btn btn-primary float-start">+ To Do</button>
                
            </div>
            <div class="card-body">
                <form action="" method="POST">

                    <div class="form">

                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label>Task</label>
                                <input type="text" class="form-control">
                            </div> 
                            <div class="col-md-3">
                                <div class="btn-remove">
                                </div>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
        <script>
        $(document).ready(function () {

            $(document).on('click', '#addMoreButton', function () {

                var htmlForm = $(".form").first().clone();

                $(htmlForm).find(".btn-remove").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>X</a>");
                $(".form").last().after(htmlForm);

                $(".form").remove();

            });

            $(document).on('click', '.remove', function (e) {
                e.preventDefault();

                $(this).parents(".form").remove();

            });

        });
    </script>









</body>

</html>