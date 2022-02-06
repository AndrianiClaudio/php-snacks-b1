<header class="header">
  <!-- SI VUOLE FILTRARE PER MARCA E PER FASCIA DI PREZZO -->
  <form action="<?php __DIR__ . '/index.html'?>">
    <label for="select-brand">
      <b>Marca</b>
      <?php
      //  var_dump($db)
      ?>
      <select name="select-brand" id="select-brand">
        <?
        $brands = [];
        foreach ($db as $car) {
          if(!in_array($car['Marca'],$brands)) {
            $brands[] = $car['Marca'];
            echo "<option value='".$car['Marca'] ."'>".$car['Marca']."</option>";
          }
        }
        ?>
      </select>
      <!-- <select name="select-brand" id="select-brand" v-model='selectBrand.value' @change = 'filterCars()'> -->
        <!-- <option  v-for='opt in selectBrand.options' -->
        <!-- :value="opt">{{opt}}</option> -->
      </select>
    </label>
    <button type="submit">Ricerca</button>
  </form>
</header>