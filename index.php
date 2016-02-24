<?php
  // $city_id = $('.city-name').val();
  // var_dump($city_id);

  $link = mysqli_connect("localhost", 'root', '', 'friends');

  $city_result = mysqli_query($link, 'SELECT id, city FROM cities limit 20');

  $accommodation_result = mysqli_query($link, 'SELECT sourceurl, name, description, layout, features FROM accommodations WHERE city_id = 1 limit 1');
  $restaurant_result = mysqli_query($link, 'SELECT sourceurl, name, description, features FROM restaurants WHERE city_id = 1 limit 1');
  $activitiy_result = mysqli_query($link, 'SELECT sourceurl, name, description, layout, features FROM activities WHERE city_id = 1 limit 1');
  $outgoing_result = mysqli_query($link, 'SELECT sourceurl, name, description, layout, features FROM outgoings WHERE city_id = 1 limit 1');

  // var_dump($city_result);
  // var_dump($accommodation);
  // var_dump($restaurant);
  // var_dump($activitiy);
  // var_dump($outgoing_result);

  $cities = [];
  $final_cities = [];
  $accommodations = [];
  $restaurants = [];
  $activities = [];
  $outgoings = [];

  for ($i=0; $i < mysqli_num_rows($city_result); $i++) { 
    $cities[$i] = mysqli_fetch_assoc($city_result);
    // $cities[$i] = mysqli_fetch_row($city_result);
    $final_cities[$i] = $cities[$i]['city'];
    // $final_cities[$i] = mysqli_fetch_array($city_result);
  }
  for ($i=0; $i < mysqli_num_rows($accommodation_result); $i++) { 
    $accommodations[$i] = mysqli_fetch_assoc($accommodation_result);
  }
  for ($i=0; $i < mysqli_num_rows($restaurant_result); $i++) { 
    $restaurants[$i] = mysqli_fetch_assoc($restaurant_result);
  }
  for ($i=0; $i < mysqli_num_rows($activitiy_result); $i++) { 
    $activities[$i] = mysqli_fetch_assoc($activitiy_result);
  }
  for ($i=0; $i < mysqli_num_rows($outgoing_result); $i++) { 
    $outgoings[$i] = mysqli_fetch_assoc($outgoing_result);
  }

  // $cities[1] = mysqli_fetch_array($city_result);
  // var_dump($final_cities);
  // var_dump(json_encode($final_cities));
  // $accommodations[1] = mysqli_fetch_array($accommodation_result);
  // var_dump($accommodations[0]);
  // $restaurants[1] = mysqli_fetch_array($restaurant_result);
  // var_dump($restaurants[0]);
  // $activities[1] = mysqli_fetch_array($activitiy_result);
  // var_dump($activities[0]);
  // $outgoings[1] = mysqli_fetch_array($outgoing_result);
  // var_dump($outgoings[0]);

  mysqli_close($link);

  // header('Location: template.php');

  require_once "template.php";
?>