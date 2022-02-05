<!DOCTYPE html>
<html lang="en">
<?php
include_once __DIR__ . '/pages/head.php';
?>
<body>
  <div id="app">
    <?php include_once __DIR__ . './pages/header.php';?>
    <div class="container">
      <section class="car"
      v-for='(car,index) in carsInfo'
      :key='`car-${index}`'>
      <h2><a :href="`pages/car/index.php?index=${index}`">{{car.fullName}}</a></h2>
      <img :src="`img/${car.imgPath}`" alt="Immagine non trovata" class="car-image" :title="car.fullName">
        <p><b>Prezzo: </b>{{car.price.toFixed(2)}} &euro;</sup></p>
        <p><b>Cilindrata: </b>{{car.displacement}} cm<sup>3</sup></p>
        <p><b>Potenza: </b>{{car.cv}} CV</p>
        <p><b>Alimentazione: </b>{{car.supply}}</p>
      </section>
    </div>
  </div>
  <script src="./js/script.js"></script>
</body>
</html>