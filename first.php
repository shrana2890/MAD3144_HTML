<?php



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
      border: 1px solid red;
      position:fixed;
      text-align:center;
      width: 100%;
      height: 100%;

     }
     </style>
  </head>
  <body>
      <img id="pic" src="pic1.jpg">
      <div id="center">
        <div style="text-align:center; margin: 30% auto;">
        <input type="text" placeholder="<i class='fas fa-search'></i>;search place" name="city" style="width:500px; height:100px">
      </div>
    </div>
  </body>
</html>
