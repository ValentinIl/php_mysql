<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>City</title>
  <link href="bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="jquery-ui.min.css">
  <link rel="stylesheet" href="jquery-ui.theme.min.css">
</head>
<body>
  <div class="container">
    <form action="" class="form form-default">
<!--       <select name="city" class="city-name">
        <?php
          foreach($cities as $city_result) {
            echo '<option value="' . $city_result['id'] . '">'. $city_result['city'] . '</option>';
          }
        ?>
      </select> -->

      <div>
        <input class="city-autocomplete" type="text" name="city" placeholder="Input city, please">
      </div>
      <input type="submit" value="Submit">
    </form>

    <!-- <h1><?=$city_result['city'];?></h1> -->
    <h1 class="title"></h1>

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
    
    <?php foreach($accommodations as $accommodation_result) {  ?>
      <tr>
        <td><?=$accommodation_result['name'];?></td>
        <td><?=$accommodation_result['description'];?></td>
        <td><?=$accommodation_result['layout'];?></td>
        <td><?=$accommodation_result['features'];?></td>
      </tr>
    <?php  }  ?>
    <?php foreach($restaurants as $restaurant_result) {  ?>
      <tr>
        <td><?=$restaurant_result['name'];?></td>
        <td><?=$restaurant_result['description'];?></td>
        <td></td>
        <td><?=$restaurant_result['features'];?></td>
      </tr>
    <?php  }  ?>
    <?php foreach($activities as $activity_result) {  ?>
      <tr>
        <td><?=$activity_result['name'];?></td>
        <td><?=$activity_result['description'];?></td>
        <td><?=$activity_result['layout'];?></td>
        <td><?=$activity_result['features'];?></td>
      </tr>
    <?php  }  ?>
    <?php foreach($outgoings as $outgoing_result) {  ?>
      <tr>
        <td><?=$outgoing_result['name'];?></td>
        <td><?=$outgoing_result['description'];?></td>
        <td><?=$outgoing_result['layout'];?></td>
        <td><?=$outgoing_result['features'];?></td>
      </tr>
    <?php  }  ?>
    </table>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--[if lt IE 9]>
      <script src="jquery-1.12.0.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
      <script src="jquery-2.2.0.min.js"></script>
    <!--[endif]-->
    <script src="jquery-ui.min.js"></script>

  <script>
    $(function() {
      var final_cities = <?=json_encode($final_cities);?>;

      $(".city-autocomplete").autocomplete({
        source: final_cities
      });

        $('.form').on('submit', function() {
          // console.log($('.city-name').val());
          // console.log($('.city-autocomplete').val());
          $('.title').html($('.city-autocomplete').val());
          

          return false
        })
    });
  </script>

</body>
</html>