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
       height: 60%;
       position: absolute;
     }
     .notification {
       height: 8%;
     }
     </style>
  </head>
  <body>
      <img id="pic" src="pic1.jpg">
      <div class="section">
      <div class="container" style="border: 1px solid red;margin-top:30%;width:60%">
          <h1><strong>What guests are saying about homes in Canada</strong></h1>
          <h2>Canada homes were rated 4.7 out of 5 stars with 4,000,000+ reviews</h2>
        <div class="columns">
          <?php
           for($i=0; $i<=2; $i++){
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
            ?>
          </div><br>
          <h2><strong> Travelling with Airbnb</strong></h2>
          <div class="columns">
            <?php
             for($i=0; $i<=2; $i++){
             ?>
               <div class="column is-one-third">
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
        <?php
         }
       ?>
     </div><br>
     <h2><strong> Homes in Canada</strong></h2>
     <div class="columns">
       <?php
        for($i=0; $i<=3; $i++){
        ?>
          <div class="column is-one-quarter">
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
   <?php
    }
  ?>

</div>
<div class="columns">
  <?php
   for($i=0; $i<=3; $i++){
   ?>
     <div class="column is-one-quarter">
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
<?php
}
?>

</div>
</div>
</div>
    <!-- <script src="script.js"></script> -->
  </body>
</html>
