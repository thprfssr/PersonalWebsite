<!DOCTYPE html>
<html>
<head>
  <title>danetiska.com</title>

  <link rel="stylesheet" href="styles.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php include '_nav.html';?>

<div class="main">
<?php
  $page = $_GET["page"];

  $prefix = "_";
  $extension = ".html";
  $filename = $prefix . $page . $extension;

  $home = $prefix . "home" . $extension;

  if (isset($page)) {
    include $filename;
  } else {
    include $home;
  }
?>
</div>

<div class="side-column">
<?php include '_side.html';?>
</div>

<?php include '_footer.html';?>

</body>
</html>
