<!-- How to get closest data of table row using map function in jQuery
How to get closest data of table row using map() method using jQuery 
In this tutorial, you will be learning how to get the closest data of table row using map() function or method in jQuery. 
So guys, In simple way to understand this, we are getting One closest data of table row i.e <tr>, and getting all the table data <td> with the help of map() method using  jquery. Let's see the below given example.
  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get closest tr data using map function in jQuery</title>
</head>
<body>
    <?php include_once('header.php');?>

    <table cellpadding="15px" border="1px" cellspacing="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody class="tableBody">
            <tr>
                <td>1</td>
                <td>Funda of Web IT</td>
                <td>Web Development</td>
                <td><button type="button" class="myButton">Click Me</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ved Prakash</td>
                <td>Full Stack</td>
                <td><button type="button" class="myButton">Click Me</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Om Prakash N</td>
                <td>Python Developer</td>
                <td><button type="button" class="myButton">Click Me</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Varun Govind</td>
                <td>Programmer</td>
                <td><button type="button" class="myButton">Click Me</button></td>
            </tr>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".myButton").click(function() {  

                $tr = $(this).closest('tr');

                var data =  $tr.children('td').map(function() {
                                return $(this).text();
                            }).get();
                
                console.log(data);
                alert('ID: '+ data[0] + ', FullName: '+ data[1] + ', Course: '+ data[2])

            });

        });
    </script>

</body>
</html>