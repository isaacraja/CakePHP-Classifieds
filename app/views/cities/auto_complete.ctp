<?php
if(!empty($cities)) {
foreach($cities as $city) {
  echo $city['City']['city']. '|' .$city['City']['id'] . "\n";
 }
}
else {
 echo 'No results';
}
?>