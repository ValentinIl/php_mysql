<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>City</title>
  <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <select name="city" id="">
      <?php
        foreach($cities as $city) {
          echo '<option value="' . $city['id'] . '">'. $city['city'] . '</option>';
        }
      ?>
    </select>

    <div>
      <input class="city-autocomplete"type="text" name="city" placeholder="Input city, please">
    </div>

    <h1>Amsterdam</h1>

    <h1><?=$city['city'];?></h1>
    <h1><?php
      var_dump($cities[0]['city']);
    ?></h1>
    <table class="table table-striped">
    <colgroup width="100">
    <colgroup width="300">
    <colgroup width="100">

    <tr>  
        <th>Name</th>
        <th>Description</th>
        <th>Layout</th>
        <th>Features</th>
    </tr>
    
    <?php foreach($accommodations as $accommodation) {  ?>
      <tr>
        <td><?=$accommodation['name'];?></td>
        <td><?=$accommodation['description'];?></td>
        <td><?=$accommodation['layout'];?></td>
        <td><?=$accommodation['features'];?></td>
      </tr>
    <?php  }  ?>
    <?php foreach($restaurants as $restaurant) {  ?>
      <tr>
        <td><?=$restaurant['name'];?></td>
        <td><?=$restaurant['description'];?></td>
        <td></td>
        <td><?=$restaurant['features'];?></td>
      </tr>
    <?php  }  ?>
    <?php foreach($activities as $activity) {  ?>
      <tr>
        <td><?=$activity['name'];?></td>
        <td><?=$activity['description'];?></td>
        <td><?=$activity['layout'];?></td>
        <td><?=$activity['features'];?></td>
      </tr>
    <?php  }  ?>
    <?php foreach($outgoings as $outgoing) {  ?>
      <tr>
        <td><?=$outgoing['name'];?></td>
        <td><?=$outgoing['description'];?></td>
        <td><?=$outgoing['layout'];?></td>
        <td><?=$outgoing['features'];?></td>
      </tr>
    <?php  }  ?>
    </table>
  </div>

  <script>
    <?php
      echo "var final_cities = city['" . $city['city'] . "'];";
    ?>


    $( ".city-autocomplete" ).autocomplete({
      source: final_cities
    });
  </script>

</body>
</html>