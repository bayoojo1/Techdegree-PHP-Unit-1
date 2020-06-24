<?php 
/* The function that generates the random page background color  */
function random_bg() {
  return strtoupper(dechex(rand(0,10000000)));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="20">  
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color: #<?php echo random_bg();?>">
  <div class="container">
    <div id="quote-box">
    <?php include 'inc/functions.php'; ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>