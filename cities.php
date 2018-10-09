<?php
 session_start();
      $p =    $_SESSION["userLoggedIn"];
      echo $p;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $u = $_POST["search"];
      If ($u == null){
        header("Location: coupons.php");
        echo "alert('please enter valid city')";
      }
      else{
      // DB: connect to database
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpassword = "";
      $dbname = "room";

      $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

      // SQL QUERY:
      $query = 'SELECT * FROM cities';

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
          $_SESSION["userLoggedIn"] = true;

          // 6. redirect them to page 2
          header("Location: city.php");
      }
}
      // ----------------------------------------
  }
?>
