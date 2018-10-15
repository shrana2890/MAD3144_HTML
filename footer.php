<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>main page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Libre+Baskerville|Source+Sans+Pro" rel="stylesheet">
     <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  </head>
 <body>

   <!-- MENU -->
 <nav class="navbar is-light"style="margin-bottom: 10px;height:7%; margin:48% auto 1% auto;">
  <div class="navbar-brand">
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-end">
      <a class="navbar-item" href="#">
        TERMS AND CONDITIONS
      </a>
      <form class="navbar-item " action="signin.php" method="GET">
        <button class="button">lOGOUT</button>

      </form>
      <div class="navbar-item has-dropdown has-dropdown-up is-hoverable">
        <!-- <a class="navbar-link" href="home.php"?crs= value>
          Currency
        </a> -->

        <!-- <form action="home.php"?pos = value method="post">
        <select class="navbar-dropdown has-dropdown has-dropdown-up is-boxed" name= "crs">
          <option value="0" class="navbar-item" >
            Currency
          </option>
          <option value="1" class="navbar-item" >
            India
          </option>
          <option value="2" class="navbar-item" >
            Canada
          </option>
          <option value= "3" class="navbar-item">
            USA
          </option>
        </select>
        <button type="submit">confirm</button>
      </form>
          <!-- <input type="hidden" name="submit"> currency </input> -->
          <form action="currency.php"?pos= value method="GET">

            <div class="select is-small is-right is-transparent">
            <select name="currency">
              <option value="0">CURRENCY</option>
              <option value="1">India</option>
              <option value="2">Canada</option>
              <option value="3">USA</option>

            </select>
          </div>
           <button class="button is-transparent" type="submit">SET CURRENCY</button>

          </form>


      <!-- if(isset($_POST['submit'])){
        $val = $_POST['crs'];
        $_SESSION["crs"] = $val;
      } -->

      </div>

    </div>
  </div>
</nav>

 </body>
 </html>
