<!-- How to get the closest table row data using jquery
How to find the closest table row data using jQuery 
In this tutorial, you will be learning how to get closest table row data using jquery. 
So guys, you are fetch data in html table where you have multiple table row data and then you want to get data or value or text 
from that table row on a button click. Let's get started with below given example.
  -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <title>Get closest tr data in jQuery</title>
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
  
          <tbody class="table table-bordered">
              <tr>
                  <td class="id">1</td>
                  <td class="name">Funda of Web IT</td>
                  <td>Web Development</td>
                  <td><button type="button" class="btn btn-success">Click Me</button></td>
              </tr>
              <tr>
                  <td class="id">2</td>
                  <td class="name">Ved Prakash</td>
                  <td>Full Stack</td>
                  <td><button type="button" class="btn btn-success">Click Me</button></td>
              </tr>
              <tr>
                  <td class="id">3</td>
                  <td class="name">Om Prakash N</td>
                  <td>Python Developer</td>
                  <td><button type="button" class="btn btn-success">Click Me</button></td>
              </tr>
              <tr>
                  <td class="id">4</td>
                  <td class="name">Varun Govind</td>
                  <td>Programmer</td>
                  <td><button type="button" class="btn btn-success">Click Me</button></td>
              </tr>
          </tbody>
      </table>
  
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
          $(document).ready(function () {
  
              $(".btn").click(function() {  
  
                  var id = $(this).closest('tr').find('td.id').text(); 
                //   alert('This is ID: '+ id);
  
                  var fullname = $(this).closest('tr').find('td.name').text();
                  alert('This is Fullname: '+ fullname + '\n This is ID: '+ id); 
  
              });
  
          });
      </script>
  
  </body>
  </html>