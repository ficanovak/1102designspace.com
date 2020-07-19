<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <?php
    $n = 1;
    foreach($obj->slider as $slider_img)
    {
         if($n == 1) {
         echo "<div class='carousel-item active'>";
         } else {
         echo "<div class='carousel-item'>";
         }
         echo "<img src='$slider_img->img_url' class='d-block w-100' alt='...'>";
         echo "</div>";
     $n++;
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
