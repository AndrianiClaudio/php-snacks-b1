<!DOCTYPE html>
<html lang="en">
<?php
include_once '../head.php';
?>
<body>
  <div id='app'>
    <div class="container">
      <ul v-for='(attr,index) in getCar(<?=$_GET['index']?>)'
      :key='`attribute-${index}`'>
        <li v-show='index != "ID"'>
          <img v-if='index == "Immagine"' :src="`../../img/${attr}`" alt="">
          <span v-else-if='index == "Prezzo"'><b>{{index}}: </b>{{attr.toFixed(2)}} &euro;</span>
          <span v-else><b>{{index}}: </b>{{attr}}</span>
        </li>
      </ul>
    </div>
  </div>
  <script src="../../js/script.js"></script>
</body>
</html>