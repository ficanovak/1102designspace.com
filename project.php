<?php
include 'templates/header.php';
$id = $_GET['id'];
?>

  <?php
     $n = 1;
     foreach($obj->projects as $projects)
     {
          if($projects->url == "project.php?id=$id") {
          echo "<div class='container-fluid mb-5' style='background-image:url($projects->img_url);background-size:cover;height:100vh;background-position:center;'>";
          echo "<div class='row'>";
          echo "</div>";
          echo "</div>";
          echo "<div class='container mb-5 mt-5 text-center'>";
          echo "<h3><b>".$projects->title."</b></h3><br>";
          echo "<h5><b>".$projects->subtitle."</b></h5><br>";
          echo "<h5>".$projects->description."</h5>";
          echo "</div>";
          
          if ($projects->iframe)
            {
            echo "<div class='container mb-5 mt-5'>";
            echo $projects->iframe;
            echo "</div>";
          }

          if ($projects->img1)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img1' style='float:left;width:100%;'/>";
            echo "</div>";
          }
          if ($projects->img2)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img2' style='float:left;width:100%;'/>";
            echo "</div>";
          }
          if ($projects->img3)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img3' style='float:left;width:100%;'/>";
            echo "</div>";
          }
          if ($projects->img4)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img4' style='float:left;width:100%;'/>";
            echo "</div>";
          }
          if ($projects->img5)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img5' style='float:left;width:100%;'/>";
            echo "</div>";
          }
          if ($projects->img6)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img6' style='float:left;width:100%;'/>";
            echo "</div>";
          }
          if ($projects->img7)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img7' style='float:left;width:100%;'/>";
            echo "</div>";
          }

          if ($projects->img8)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img8' style='float:left;width:100%;'/>";
            echo "</div>";
          }
          if ($projects->img9)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img9' style='float:left;width:100%;'/>";
            echo "</div>";
          }
          if ($projects->img10)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img10' style='float:left;width:100%;'/>";
            echo "</div>";
          }
          if ($projects->img11)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img11' style='float:left;width:100%;'/>";
            echo "</div>";
          }
          if ($projects->img12)
            {
            echo "<div class='container mb-5 slika'>";
            echo "<img src='$projects->img12' style='float:left;width:100%;'/>";
            echo "</div>";
          }
     }
     $n++;
     }
     ?>

<div class="container mb-5 mt-5">
  <div class="row">
    <?php
  foreach($obj->contact as $contact)
  {
       $city_lower = strtolower($contact->city);
       echo "<div class='contact col-md-6 p-0'>";
       echo "<center>";
       echo "<h4>$contact->city</h4><br>";
       echo "<p><a href='contact.php#$city_lower'>$contact->address</a></p>";
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
