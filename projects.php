<?php
include 'templates/header.php';
?>
<div class="container-fluid">
  <ul class="nav nav-pills mb-2 mt-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#all" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#still" role="tab" aria-controls="pills-profile" aria-selected="false">Still</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#animation" role="tab" aria-controls="pills-contact" aria-selected="false">Animation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#vr" role="tab" aria-controls="pills-vr" aria-selected="false">VR</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="row p-1">
<?php
       $n = 1;
       foreach ($obj->projects as $projects) {
           echo "<div class='col-md-3 p-0' style='background-image:url($projects->img_url); background-size: cover; min-height:300px; border:4px solid #ffffff;background-position:center;'>";
           echo "<a href='$projects->url'>";
           if ($n % 2 == 0) {
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
           $n++;
       }
?>
      </div>
    </div>
    <div class="tab-pane fade" id="still" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="row p-1">
      <?php
       $n = 1;
       foreach ($obj->projects as $projects) {
           if ($projects->category == "still") {
               echo "<div class='col-md-3 p-0' style='background-image:url($projects->img_url); background-size: cover; min-height:300px; border:4px solid #ffffff;'>";
               echo "<a href='$projects->url'>";
               if ($n % 2 == 0) {
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
           $n++;
       }
       ?>
      </div>
    </div>
    <div class="tab-pane fade" id="animation" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="row p-1">
      <?php
       $n = 1;
       foreach ($obj->projects as $projects) {
           if ($projects->category == "animation") {
               echo "<div class='col-md-3 p-0' style='background-image:url($projects->img_url); background-size: cover; min-height:300px; border:4px solid #ffffff;'>";
               echo "<a href='$projects->url'>";
               if ($n % 2 == 0) {
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
           $n++;
       }
       ?>
      </div>
    </div>
    <div class="tab-pane fade" id="vr" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="row p-1">
<?php
            $n = 1;
            foreach ($obj->projects as $projects) {
                if ($projects->category == "vr" or $projects->category2 == "vr") {
                    echo "<div class='col-md-3 p-0' style='background-image:url($projects->img_url); background-size: cover; min-height:300px; border:4px solid #ffffff;'>";
                    echo "<a href='$projects->url'>";
                    if ($n % 2 == 0) {
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
                $n++;
            }
?>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5 mb-5">
  <div class="row">
    <?php
  foreach ($obj->contact as $contact) {
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
