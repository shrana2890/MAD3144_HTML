<?php
 session_start();
      $results =    $_SESSION["locationResult"];
      $numbers = $_SESSION["homeNumber"];
      $p =0;
    //  print_r[$results];
      echo "<br>";
       echo $numbers;
//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//       $u = $_POST["search"];
//       If ($u == null){
//         header("Location: coupons.php");
//         echo "alert('please enter valid city')";
//       }
//       else{
//       // DB: connect to database
//       $dbhost = "localhost";
//       $dbuser = "root";
//       $dbpassword = "";
//       $dbname = "room";

//       $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

//       // SQL QUERY:
//       $query = 'SELECT * FROM cities';

//       echo "Query you are sending to db: " . $query  . "<br>";

//       $results = mysqli_query($conn, $query);
//       $y = mysqli_num_rows($results);
//       echo "Number of rows returned: " . $y . "<br>";

//       if ($y == 0) {
//           echo "<span style='color:red'> Error - wrong city </span><br>";
//       }
//       else {
//           // 5. set a session variable to show the person is logged in
//           session_start();
//           $_SESSION["userLoggedIn"] = true;

//           // 6. redirect them to page 2
//           header("Location: city.php");
//       }
// }
//       // ----------------------------------------
//  }
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
       height: 60%;
       position: absolute;
     }
     .notification {
       height: 8%;
     }
     </style>
  </head>
  <body>
<div class="section">
  <?php
   for($j=0; $j<= $numbers/3; $j++){

   ?>
      <div class="container" style="margin-top:20%;width:60%; margin: 0 auto;">

        <div class="columns">
          <?php
           for($i=0; $i<=2; $i++){
             $p++;
             if($p <= $numbers){

           ?>
          <div class="column is-one-third">
           <div class="card">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                  <figure class="image is-48x48">
                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="media-content">
                  <p class="title is-4">John Smith</p>
                  <p class="subtitle is-6">@johnsmith</p>
                </div>
              </div>

              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </div>
            </div>
          </div>
        </div>
       <?php
             }
           }
            ?>
          </div>
        </div><br>
        <?php
              }
             ?>
      </div>
  <!-- <script src="script.js"></script> -->
</body>
</html>
