<?php
$days_of_week = array('', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', '', '');
$today = $days_of_week[date('N')];
?>
<!doctype html>
<html>
  <head>
    <title>Mam, wat eten we vandaag?</title>
    <style>
      body { font-family: Verdana; text-align: center }
    </style>
  </head>
  <body>
    <h2>Mam, wat eten we vandaag?</h2>
    <p>Het is week <?php echo (int)date('W') ?> van het jaar <?php echo date ('Y') ?></p>
    <hr>
    <p>
<?php
if (!file_exists($today . '.png')) {
  $today = '';
}

if (!empty($today)) {
  echo "    <img src=\"" . $today . ".png\" style=\"box-shadow: 2px 2px 10px #aaaaaa;\" width=\"500\">";
}
?>
    </p>
    <hr>
    <p style="font-size: 8pt">door Cas Ebbers - <a href="#">source</a></p>
  </body>
</html>
