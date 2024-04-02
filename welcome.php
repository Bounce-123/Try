<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
      .container {
          min-height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
          padding: 15px;
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      .container span {
          background-color: gold;
          color: white;
          padding: 15px;
          margin: 10px;
          border-radius: 8px;
          font-size: 25px;
          font-weight: 600;
          letter-spacing: 5px;
          text-transform: uppercase;
      }

      .container p {
          margin: 20px;
      }

      .container .btn {
          margin-top: -30px;
          width: 150px;
          background-color: gold;
          color: white;
          font-weight: 500;
          letter-spacing: 5px;
          text-transform: uppercase;
          border-radius: 20px;
      }

      .container .btn:hover {
          margin-top: -30px;
          width: 200px;
          background-color: darkorange;
          font-weight: 500;
          transition: 1s;
          color: white;
      }

      button {
          height: 1.5cm;
          width: 8cm;
          background-color: yellow;
          color: #fff;
          border: none;
          border-radius: 2cm;
          cursor: pointer;
          transition: 0.5s;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      button a {
          color: black;
          text-decoration: none;
      }
    </style>
</head>
<body>
    <div class="container">
        <img src="img/1.png">
        <h1>
            <?php
            $firstName = isset($_GET['fname']) ? $_GET['fname'] : '';
            $lastName = isset($_GET['lname']) ? $_GET['lname'] : '';
            
            echo htmlspecialchars($firstName . ' ' . $lastName) . ' has been added to your phone book';
                        ?>
        </h1>
        <p>Thank you for adding your information to the phonebook.</p>

        <form action="table.php">
            <button type="submit">Proceed to Phone book</button>
        </form>
    </div>
</body>
</html>
