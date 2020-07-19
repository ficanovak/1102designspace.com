<?php
include 'templates/header.php';
?>
<div class="container-fluid p-0">
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="milano" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="feature map" style="width: 100%">
        <iframe
          width="100%"
          height="600"
          src="https://maps.google.com/maps?width=100%&amp;height=600&amp;&amp;q=Viale Fulvio Testi 80, 20126, Milano&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
          frameborder="0"
          scrolling="no"
          marginheight="0"
          marginwidth="0"></iframe>
      </div>
    </div>
    <div class="tab-pane fade" id="belgrade" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="feature map" style="width: 100%">
        <iframe
          width="100%"
          height="600"
          src="https://maps.google.com/maps?width=100%&amp;height=600&amp;&amp;q=Molerova 82, 11000 Belgrade&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
          frameborder="0"
          scrolling="no"
          marginheight="0"
          marginwidth="0"></iframe>
      </div>
    </div>
    <div class="container p-0">
      <ul class="nav nav-pills nav-zero mb-0 justify-content-center" id="pills-tab" role="tablist">
<?php
$n = "1";
foreach ($obj->contact as $contact) {
    if ($n == 1) {
        $status = 'active';
        $pills = 'milano';
    } else {
        $status = '';
        $pills = 'belgrade';
    }
    echo "<li class='contact nav-item nav-zero col-md-6'>";
    echo "<a class='nav-link $status' id='pills-profile-tab' data-toggle='pill' href='#$pills' role='tab' aria-controls='$pills' aria-selected='false'>";
    echo "<h4>$contact->city</h4>";
    echo "</a>";
    echo "<div class='mt-3'>";
    echo "<center>";
    echo "<p>$contact->address</p>";
    echo "<p><a href='mailto:$contact->email'>$contact->email</a></p>";
    echo "<p><a href='tel:$contact->phone'>$contact->phone</a></p>";
    echo "</center>";
    echo "</div>";
    echo "</li>";
    $n++;
}
?>
      </ul>
    </div>
  </div>
</div>
<?php
include 'templates/footer.php';
?>
