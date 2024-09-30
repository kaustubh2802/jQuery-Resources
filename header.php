<!DOCTYPE html>
<html lang="en">
<head>
   

    <title>Header</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'> -->
</head>
<body>

    <div class="container-fluid p-3 bg-dark mb-3">

        <a class="btn btn-lg btn-danger" href="index.php">HOME</a>

        <button onclick="reloadPage()">Refresh</button>

      
        <!-- <i class="fi fi-sr-house-blank"></i> -->
        <div class="float-end me-4 text-light">Uicons by <a href="https://www.flaticon.com/uicons">Flaticon</a>

            <div class="text-warning">
                <div id="div"><h4 id="hed"><?= date('H:i:s') ?></h4></div> 
            </div>
        </div>
    </div>
    

<!--        div or html end -->
<!-- ========================================================================================================= -->
<!--        script tag start -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>









    <script>
        function reloadPage() {
            location.reload(); // This will reload the current page
        }
    </script>
    <script>
        $(document).ready(function () {

            setInterval( function() {
                $("#div").load(location.href + " #hed");
             }, 1000 );

        });
    </script>
</body>
</html>
