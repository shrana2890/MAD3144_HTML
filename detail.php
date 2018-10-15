<?php
include("header.php");

//  if ($_SERVER["REQUEST_METHOD"] == "GET"){
      // 1. Get location id from the URL

      $cardID = $_GET["pos"];
      session_start();
      $currency = $_SESSION["currency"];

      $p =0;
      $q = 0;
      $price = 1.0;
      $sign = "$";

      // 2. DB: Connect to database
      $dbhost = "localhost";		// address of your database
      $dbuser = "root";					// database username
      $dbpassword = "";					// database password: on MAMP, this is "root"
      $dbname = "airbnb";							// @TODO: database name
      $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

      // 3. Query database for a location that matches the id
       $sql = "SELECT * FROM images WHERE imageid=" . $cardID;
      $sqlDetail = "SELECT * FROM cities WHERE Id=" .$cardID;
      $results = mysqli_query($conn, $sql);
      $resultsDetail = mysqli_query($conn, $sqlDetail);
      $x = mysqli_fetch_assoc($results);    //you don't need a while loop because you only get 1 thing back
      $xDetail = mysqli_fetch_assoc($resultsDetail);
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
      //print_r($x);
?>

<!DOCTYPE html>
<html>
<head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>main page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Libre+Baskerville|Source+Sans+Pro" rel="stylesheet">
     <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
     <style type="text/css">
     /* #pic{
       width: 100%;
       height: 60%;
       position: absolute;
     } */
     .notification {
       height: 8%;
     }
     #star{
     	color: orange;
     }
     #star:hover{
     	color:grey;
     }

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
    #descript{
      color: grey;
      font-size: 15px;
     }
     #name{
      color:orange;
     }
     </style>
  </head>
</head>

<body>
<div class="section">
    <div class="container" style="margin-top:20%;width:70%; margin: 0 auto;">

      <div class="columns">

          <?php
           // $x = mysqli_fetch_assoc($results);
            // $b = mysqli_fetch_assoc($img);
           //	echo $img["pic1"];
          // echo ' <a href="home.php?pos='. $x["Id"] . '">';


         ?>

        <div class="column">
         <div class="card ">
          <div class="card-image">
            <figure class="image is-4by3">
              <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="<?php echo $x["pic1"] ?>" style="width:100%">
    <div class="text">Pic One</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="<?php echo $x["pic2"]?>" style="width:100%">
    <div class="text">Pic Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="<?php echo $x["pic3"]?>" style="width:100%">
    <div class="text">Pic Three</div>
  </div>
   <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="<?php echo $x["pic4"]?>" style="width:100%">
    <div class="text">Pic Four</div>
  </div>
   <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="<?php echo $x["pic5"]?>" style="width:100%">
    <div class="text">Pic Five</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <!-- -->
            </figure>
          </div>
          <div class="card-content">
            <div class="content" style="font-style: 'Varela Round', sans-serif;font-size:17px;color:#533393">
      <?php
echo "<div id='name'>".$xDetail["name"];
echo "</div>";
echo $xDetail["type"]. "  in".$xDetail["location"];
echo "<br>";
echo "<div id='descript'>Description: ".$xDetail["description"];
echo "</div>";
echo $sign." ".$x["price"]*$price." per Night";
echo "<br>";
echo "Ownner Name: ".$xDetail["owner"];
echo "<br>";
echo "No. of bedrooms: ".$xDetail["bedrooms"];
echo "<br>";
echo "Bathroom: ".$xDetail["bath"];
echo "<br>";
echo "Free Parking: ".$xDetail["free_parking"];
echo "<br>";
echo "Wifi Availability: ".$xDetail["wifi"];
echo "<br>";
echo "Kitchen Availability: ".$xDetail["kitchen"];
echo "<br>";
echo "Cable Tv Availability: ".$xDetail["cable_tv"];
echo "<br>";

    echo "<a href='#' id='star'>";
          if( $q == 0){
            for($a=1; $a<=5;$a++){
              if($a <= $xDetail["rating"]){

              echo '<i class="fas fa-star " ></i>';

           }else if(floor($xDetail["rating"]) != round($xDetail["rating"])){
            echo '<i class="fas fa-star-half "></i>';
           }
           else{
             echo '<i class="far fa-star "></i>';
           }
    }
    $q = 1;
 }

   echo "</a>";
    echo " ".$xDetail["reviews"]."  Reviews";
     ?>
<form action="creditcard.php"?pos= value method="GET">

  <div class="select is-medium is-centered">
  <select name="beds">
    <option value="0">Number Of Beds</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
</div>
 <button class="button is-medium is-outlined" type="submit" id="bedselect"style="float: right;">Confirm</button>

</form>


            </div>

          </div>
        </div>
      </div>

  </a>
     <?php
           $q=0;
        $q=0;
          ?>
        </div>
      </div><br>

    </div>
<!-- <script src="script.js"></script> -->
<script type="text/javascript">
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
</script>
</body>
</html>
