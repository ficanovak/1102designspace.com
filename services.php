<?php
include 'templates/header.php';
?>
<div class="container-fluid p-lg-5">
<?php
$n = 1;
foreach($obj->services as $services)
{
    echo "<div class='row mb-5'>";
    echo "<div class='col-lg-5 p-0'>";
    echo "<a href='$services->url'>";
    echo "<div class='content_img'>";
    echo "<img src='$services->img_url'/>";
    echo "</div>";
    if($n % 2 == 0){
    echo "<div class='even_div'>";
    } else {
    echo "<div class='odd_div'>";
    }
    echo "<div class='content'>";
    echo "<h4>$services->name</h4>";
    echo "</div>";
    echo "</div>";
    echo "</a>";
    echo "</div>";
    echo "<div class='col-lg-7 pt-3 pl-3'>";
    echo "<h3>$services->name</h3>";
    echo "<p>$services->text</p>";
    echo "</div>";
    echo "</div>";
    $n++;
  }
?>
</div>
</div>
<?php
include 'templates/footer.php';
?>
