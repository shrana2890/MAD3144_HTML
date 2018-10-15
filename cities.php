<?php
include("header.php");
 session_start();
      $u =    $_SESSION["city"];
      $numbers = $_SESSION["locationResult"];
      $currency = $_SESSION["currency"];

      $p =0;
      $q = 0;
      $price = 1.0;
      $sign = "$";

      $dbhost = "localhost";
      $dbuser = "root";
      $dbpassword = "";
      $dbname = "airbnb";

      $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

      // SQL QUERY:
      $query = 'SELECT * FROM cities WHERE  location="'
              . $u

              . '"';
      //  $sql = 'SELECT id FROM cities WHERE  location="'
      //          . $u
      //
      //         . '"';
      // $check = 'SELECT * FROM images WHERE  imageid="'
      //         . $sql
      //
      //         . '"';

      $results = mysqli_query($conn, $query);
    //   $img = mysqli_query($conn, $check);

      $y = mysqli_num_rows($results);
      if ($currency == "1"){
        $price =50;
        $sign = "RUPEES";
      } elseif ($currency == "2") {
        $price = 1.2;
        $sign = "CAD";
      } else{
        $price= 1;
        $sign ="$";
      }
    //  $z = mysqli_num_rows($img);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>main page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Libre+Baskerville|Source+Sans+Pro" rel="stylesheet">
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
     #star{
     	color: orange;
     }
     #star:hover{
     	color:grey;
     }


.card:hover{
opacity: 0.8;
box-shadow: 0.5px 2px 2px 0px;
}

     </style>
  </head>
  <body>
<div class="section">
  <?php
   for($j=0; $j<= $numbers/3; $j++){
  // 	while( $x = mysqli_fetch_assoc($results) ) {

   ?>
      <div class="container" style="margin-top:20%;width:60%; margin: 0 auto;">

        <div class="columns">
          <?php

           for($i=0; $i<=2; $i++){
             $p++;

             if($p <= $numbers){
              //$x = $results[$q];
             	$x = mysqli_fetch_assoc($results);
             	// $b = mysqli_fetch_assoc($img);
             //	echo $img["pic1"];
             echo ' <a href="detail.php?pos='. $x["Id"] . '">';


           ?>

          <div class="column is-one-third">
           <div class="card ">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="<?php echo $x["room"]?>" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="content" style="font-family: FontAwesome;">
              	<p class="title " style="font-family: 'Varela Round', sans-serif;font-size:16px;"><?php echo $x["type"]." ".$x["beds"]." ". "bed" ?></p>
                  <p class="subtitle"style="font-family:'Varela Round', sans-serif;font-size:15px;"><?php echo $x["name"]?></p>
              	<p style="font-style: 'Varela Round', sans-serif;font-size:17px;color:#533393"><?php echo $sign." ".$x["price"]*$price." per Night"?></p>
              	<a href="#" id="star" style="font-family: 'Varela Round', sans-serif;font-size:12px;">
              		<?php
              				if( $q == 0){
              					for($a=1; $a<=5;$a++){
              						if($a <= $x["rating"]){

              		        echo '<i class="fas fa-star " ></i>';

              		     }else if(floor($x["rating"]) != round($x["rating"])){
              		     	echo '<i class="fas fa-star-half "></i>';
              		     }
                       else{
                         echo '<i class="far fa-star "></i>';
                       }
              	}
              	$q = 1;
             }
              		?>

                </a>
                <?php
                echo $x["reviews"]." "."reviews";
                ?>


              </div>

            </div>
          </div>
        </div>
        <?php
      echo "</a>";
      ?>
    </a>
       <?php

             }
             $q=0;
         }
          $q=0;
            ?>
          </div>
        </div><br>
        <?php
              }
             ?>
      </div>
      <?php
      include("footer.php");
      ?>
</body>
</html>
