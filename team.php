<?php
include 'templates/header.php';
?>
<div class="container mt-lg-5 mb-5">
<?php
foreach($obj->team as $team)
{
    echo "<div class='row mb-5'>";
    echo "<div class='col-lg-4 mb-3 p-0'>";
    echo "<img src='$team->img_url' style='float:left;width:100%;'/>";
    echo "</div>";
    echo "<div class='col-lg-8 pl-3'>";
    echo "<h3>$team->name</h3>";
    echo "<h5>$team->position</h5>";
    echo "<p>$team->text</p>";
    echo "</div>";
    echo "</div>";
  }
?>
</div>
</div>
<?php
include 'templates/footer.php';
?>
