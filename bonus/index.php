<?php
include_once __DIR__ . '/server/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once __DIR__ . '/pages/head.php';
?>
<body>
  <div id="app">
    <?php include_once __DIR__ . './pages/header.php';?>
    <div class="container">
      <?php
      foreach ($db as $i => $car) {
        // var_dump($car);
        echo "<section class='car'>";
        // <h2><a :href="`pages/car/index.php?index=${index}`">{{car.brand}} {{car.generation}}</a></h2>
        echo "<h2><a href='pages/car/index.php?index=".$i ."'>" . $car['Marca'] .' '. $car['Generazione'] ."</a></h2>";
        echo "<img src='./img/".$car['Immagine'] ."' alt='Immagine non trovata' class='car-image'>";
        echo "</section>";
        echo "<p><b>Prezzo: </b>". number_format($car['Prezzo'], 2, $deciaml_separator = ',', $thousand_separator = '.')  ." &euro;</sup></p>";
        echo "<p><b>Cilindrata: </b>". $car['Cilindrata'] . "cm<sup>3</sup></p>";
        echo "<p><b>Potenza: </b>". $car['Potenza']. " CV</p>";
        echo "<p><b>Alimentazione: </b>" . $car['Alimentazione'] . "</p>";
      }
      // var_dump($db);
      ?>
      <!-- <section class="car"
      v-for='(car,index) in filterCarsInfo'
      :key='`car-${index}`'>
      <img :src="`img/${car.imgPath}`" alt="Immagine non trovata" class="car-image" :title="car.fullName">
        <p><b>Prezzo: </b>{{car.price.toFixed(2)}} &euro;</sup></p>
        <p><b>Cilindrata: </b>{{car.displacement}} cm<sup>3</sup></p>
        <p><b>Potenza: </b>{{car.cv}} CV</p>
        <p><b>Alimentazione: </b>{{car.supply}}</p>
      </section> -->
    </div>
  </div>
</body>
</html>