<?php
  $link = mysqli_connect("localhost", 'root', '', 'friends');

  $city = mysqli_query($link, 'SELECT id, city FROM cities limit 20');

  $accommodation = mysqli_query($link, 'SELECT sourceurl, name, description, layout, features FROM accommodations WHERE city_id = 1 limit 1');
  $restaurant = mysqli_query($link, 'SELECT sourceurl, name, description, features FROM restaurants WHERE city_id = 1 limit 1');
  $activitiy = mysqli_query($link, 'SELECT sourceurl, name, description, layout, features FROM activities WHERE city_id = 1 limit 1');
  $outgoing = mysqli_query($link, 'SELECT sourceurl, name, description, layout, features FROM outgoings WHERE city_id = 1 limit 1');

  // var_dump($city);
  // var_dump($accommodation);
  // var_dump($restaurant);
  // var_dump($activitiy);
  // var_dump($outgoing);

  for ($i=0; $i < mysqli_num_rows($city); $i++) { 
    $cities[$i] = mysqli_fetch_assoc($city);
  }
  for ($i=0; $i < mysqli_num_rows($accommodation); $i++) { 
    $accommodations[$i] = mysqli_fetch_assoc($accommodation);
  }
  for ($i=0; $i < mysqli_num_rows($restaurant); $i++) { 
    $restaurants[$i] = mysqli_fetch_assoc($restaurant);
  }
  for ($i=0; $i < mysqli_num_rows($activitiy); $i++) { 
    $activities[$i] = mysqli_fetch_assoc($activitiy);
  }
  for ($i=0; $i < mysqli_num_rows($outgoing); $i++) { 
    $outgoings[$i] = mysqli_fetch_assoc($outgoing);
  }

  // $cities[1] = mysqli_fetch_array($city);
  // var_dump($cities[0]);
  // $accommodations[1] = mysqli_fetch_array($accommodation);
  // var_dump($accommodations[0]);
  // $restaurants[1] = mysqli_fetch_array($restaurant);
  // var_dump($restaurants[0]);
  // $activities[1] = mysqli_fetch_array($activitiy);
  // var_dump($activities[0]);
  // $outgoings[1] = mysqli_fetch_array($outgoing);
  // var_dump($outgoings[0]);


  mysqli_close($link);

  require_once "template.php";
?>