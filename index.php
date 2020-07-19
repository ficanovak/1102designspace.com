<?php
include 'templates/header.php';
include 'templates/slider-classic.php';
?>
<div class="container mt-5 mb-5">
  <?php
  foreach($obj->home_text as $home_img_text)
  {
       echo "<div class='row'>";
       echo "<div class='col-md-6 text-div'>";
       echo "<img src='$home_img_text->img_url' class='card-img logo-img' alt='...'>";
       echo "</div>";
       echo "<div class='col-md-6 text-div'>";
       echo "$home_img_text->text";
       echo "</div>";
       echo "</div>";
  }
  ?>
</div>
<div class="container-fluid">
  <div class="row p-1">
  <?php
$n = 1;
$x = 1;
foreach($obj->projects as $projects) {
  $x++;
}
$z = 1;
foreach($obj->projects as $projects)
{
     if($z >= $x-$obj->home_number_of_projects) {
      echo "<div class='col-lg-3 p-0' style='background-image:url($projects->img_url); background-size: cover; min-height:300px; border:4px solid #ffffff;background-position:center;'>";
      echo "<a href='$projects->url'>";
      if($x % 2 == 0){
      echo "<div class='even_div'>";
      } else {
      echo "<div class='odd_div'>";
      }
      echo "<div class='content'>";
      echo "<h4>$projects->name</h4>";
      echo "<br>";
      echo "$projects->location";
      echo "</div>";
      echo "</div>";
      echo "</a>";
      echo "</div>";
     }
$z++;
}
?>
  </div>
</div>
<div class="container mt-5 mb-5">
  <div class="row">
    <?php
foreach($obj->contact as $contact)
{
     $city_lower = strtolower($contact->city);
     echo "<div class='contact col-md-6 p-0'>";
     echo "<center>";
     echo "<h4>$contact->city</h4><br>";
     // echo "<p><a href='contact.php#$city_lower'>$contact->address</a></p>";
     echo "<p><a href='tel:$contact->phone'>$contact->phone</a></p>";
     echo "<p><a href='mailto:$contact->email'>$contact->email</a></p>";
     echo "</center>";
     echo "</div>";
}
?>
  </div>
</div>
<?php
include 'templates/footer.php';
?>
