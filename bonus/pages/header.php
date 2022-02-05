<header class="header">
  <!-- SI VUOLE FILTRARE PER MARCA E PER FASCIA DI PREZZO -->
  <label for="select-brand">
    <b>Marca</b>
    <select name="select-brand" id="select-brand">
      <?
      
       echo "<option value=''></option>";
      ?>
    </select>
    <!-- <select name="select-brand" id="select-brand" v-model='selectBrand.value' @change = 'filterCars()'> -->
      <!-- <option  v-for='opt in selectBrand.options' -->
      <!-- :value="opt">{{opt}}</option> -->
    </select>
  </label>
  <label for="select-price">
    <b>Prezzo</b>
    <select name="select-price" id="select-price">
      <?
       echo "<option value=''></option>";
      ?>
    </select>
    <!-- <select name="select-price" id="select-price" v-model='selectPrice.value' @change = 'filterCars()'> -->
      <!-- <option  v-for='opt in selectPrice.options' -->
      <!-- :value="opt">{{opt}}</option> -->
    </select>
  </label>
</header>