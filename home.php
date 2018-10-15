<?php
include("header.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $u = $_POST["city"];

     echo $currency;
      // DB: connect to database
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpassword = "";
      $dbname = "airbnb";

      $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

      // SQL QUERY:
      $query = 'SELECT * FROM cities WHERE  location="'
              . $u

              . '"';

      $results = mysqli_query($conn, $query);
      $y = mysqli_num_rows($results);

      if ($y == 0) {
          echo "<script type='text/javascript'>
           alert('please enter valid city');
           </script>";
      }
      else {
          // 5. set a session variable to show the person is logged in
          session_start();
          $_SESSION["locationResult"] = $y;
          $_SESSION["city"] = $u;



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
       color:grey;
       border: 2px solid grey;

     }

     #enter{
      width:90%;


     }
     #enterbutton{
      margin-top: 5px;
      height:92px;
      padding-top: 0px;
      border-top: 0px solid transparent;
      width: 37%;
      border-radius: 10%;
      border-bottom: 3px solid grey;
     }
     /*#image{
      width: 100%;
      height: 95px;
     }*/
     </style>
  </head>
  <body>
      <img id="pic" src="p1.jpg">
      <div id="center">
        <div id="enter" style="text-align:center; margin: 17% auto;">
        <form action="home.php" method="POST">
        <input type="text" placeholder= "Enter City Name" name="city" id="search" required><br>
        <button type="submit" id="enterbutton" style="font-size: 35px; color: grey;">Search</button>
      </form>
      </div>
    </div>
    <?php
    include("footer.php");
    ?>
  </body>
</html>
