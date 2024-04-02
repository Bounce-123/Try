<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        PHONEBOOK          
    </title>
  </head>
  <body>
  <form action="connection.php"  method="POST">
  <center><div id="container">
    <h1>PHONE BOOK</h1>
    
     
    <p>Create your contact</p>
    <br>
    <input type="text" id="fname" name="fname" placeholder="firstname" required="required" required style="border-radius:20px; height:20px; width:200px; ">
    <br><br>
    <input type="text" id="lname" name="lname" placeholder="lastname" required="required" required style="border-radius:20px; height:20px; width:200px;">
    <br><br>
        <input type="text" id="Email" name="Email" placeholder="email address" required="required" required style="border-radius:20px; height:20px; width:200px;">
    <br><br>
    <input type="text" id="number" name="number" placeholder="phone number" required="required" required style="border-radius:20px; height:20px; width:200px;">
    <br><br>
    <input type="text" id="add" name="add" placeholder="home address" required="required"required style="border-radius:20px; height:20px; width:200px;">
    <br><br>
    <br><br>
    <button>ADD</button><br><br>
<a href="table.php">Phone book</a>
    </form> 
  </div>

    </center> 
  <br>
  </body>
</html>