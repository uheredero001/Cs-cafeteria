<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <div class="w3-container">
      <div class="w3-row">
        <div class="w3-half w3-red" align="center">
          <h1> Vista camarero</h1>
          <table class="w3-table">
            <tr>
              <?php
                  ini_set('display_errors', '1');
                  $servername = "localhost";
                  $username = "root";
                  $password = "root";

                  // Create connection
                  $conn = new mysqli($servername, $username, $password,"Cs-cafeteria");

                  // Check connection
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }

                  $sql = 'SELECT * FROM Productos';
                  $result = mysqli_query($conn,$sql);
                  if($result==false){echo "es false";}
                  $num=mysqli_num_rows($result);
                  while($row=mysqli_fetch_array($result)){
                    echo '<td><img class="w3-image" src="data:image/jpeg;base64,' .base64_encode($row["Imagen"]). '"/></td>';
                  }

              ?>
            </tr>
          </table>
        </div>
        <div class="w3-half w3-blue"align="center">
          <h1> Vista cocinero</h1>
        </div>
      </div>

    </div>
  </body>
</html>
