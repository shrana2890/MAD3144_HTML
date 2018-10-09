<?php
 $u = $_GET["city"];
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
      // DB: connect to database
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpassword = "";
      $dbname = "room";

      $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

      // SQL QUERY:
      $query = 'SELECT * FROM cities WHERE Owner = "Leslie"';

      echo "Query you are sending to db: " . $query  . "<br>";

      $results = mysqli_query($conn, $query);
      $y = mysqli_num_rows($results);
      echo "Number of rows returned: " . $y . "<br>";

      if ($y == 0) {
          echo "<span style='color:red'> Error - wrong city </span><br>";
      }
      else {
          // 5. set a session variable to show the person is logged in
          session_start();
          $_SESSION["userLoggedIn"] = $y;

          // 6. redirect them to page 2
          header("Location: cities.php");
      }
}
      // ----------------------------------------
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>main page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
     <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
     <style type="text/css">
     #pic{
       width: 100%;
       height: 100%;
       position: absolute;
     }
       #center {
      border: 1px solid transparent;
      position:fixed;
      text-align:center;
      width: 100%;
      height: 100%;
     }
     input{
       color: white;
       width:500px;
       text-indent: 20%;
       height:95px;
       background:url(search.png); 
       background-repeat:no-repeat;
       font-size:40px;
       color:white;
       border: 2px solid white;

     }
    
     #enter{
      width:90%;

     }
     #enterbutton{
      height:92px;
      padding-top: 0px;
      border-top: 0px solid transparent;
      width: 110px;
      border-radius: 10%;
      border-bottom: 2px solid white;
     }
     #image{
      width: 40%;
      height: 50%;
     }
     </style>
  </head>
  <body>
     <!--  <img id="pic" src="pic5.jpg"> -->
      <div id="center">
        <div id="enter" style="text-align:center; margin: 30% auto;">
        <form action="home.php" method="GET">
        <input type="text" placeholder= "Enter City Name" name="city" id="search">
        <button type="submit" id="enterbutton" ><img id="image" src="search.png"></button>
      </form>
      </div>
    </div>
  </body>
</html>
