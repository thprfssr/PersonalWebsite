<!DOCTYPE html>
<html>
<head>
  <title>danetiska.com</title>

  <link rel="stylesheet" href="styles.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php include '_nav.html';?>
<?php include "_test.html" ?>



<article>
  <h3><a href="/?page=kavon">Kavon, the Terror from Below</a><h3>
  <a href="/?page=kavon"><img src="img/kavon.jpg" style="width: 100px;"></a>
</article>



  <?php
    file_put_contents("test.txt", $_POST["textfield"], FILE_APPEND);
    echo file_get_contents("test.txt");
  ?>

<?php include '_footer.html';?>
</body>
</html>
