<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div id="app">
    <div class="container">
      <section class="car"
      v-for='(car,index) in cars_info'
      :key='`car-${index}`'>
      <h2><a :href="`car.php?index=${index}`">{{car.fullName}}</a></h2>
      <img :src="`img/${car.imgPath}`" alt="Immagine non trovata" class="car-image" :title="car.fullName">
        <p><b>Prezzo: </b>{{car.price.toFixed(2)}} &euro;</sup></p>
        <p><b>Cilindrata: </b>{{car.displacement}} cm<sup>3</sup></p>
        <p><b>Potenza: </b>{{car.cv}} CV</p>
        <p><b>Alimentazione: </b>{{car.supply}}</p>
      </section>
    </div>
  </div>
  <script src="js/script.js"></script>
</body>
</html>