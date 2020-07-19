<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_URL, 'http://1102designspace.com/assets/json/all-try.json');

$result = curl_exec($ch);

curl_close($ch);

$obj = json_decode($result);

?>

<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="Filip Novaković (@ficanovak)">

    <title><?php echo $obj->site_short_name; ?></title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all"/>

    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all"/>

    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <link rel="icon" href="http://1102designspace.com/assets/img/logo.jpg">

  </head>

  <body>

    <div class="cover-container d-flex flex-column">

      <?php include 'navbar.php'; ?>

