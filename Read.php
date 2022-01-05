<?php
$file = fopen("contact_data.csv","r");

while(! feof($file))
  {

  print_r(fgetcsv($file));
  }

fclose($file);

?>
