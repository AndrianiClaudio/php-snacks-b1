<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="app">
    <ul v-for='car in db'>
      <li v-for='(detail,index) in car'>
        <b v-if='index!="Immagine"'>{{index}}: </b>
        <img v-if='index=="Immagine"' :src="`./img/${detail}`" alt="">
        <span v-else>
          {{detail}}
        </span>
      </li>
    </ul>
  </div>
  <script src="js/script.js"></script>
</body>
</html>