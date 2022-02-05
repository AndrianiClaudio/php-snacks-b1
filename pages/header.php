<header class="header">
  <!-- SI VUOLE FILTRARE PER MARCA E PER FASCIA DI PREZZO -->
  <select name="select-brand" id="select-brand" v-model='selectBrand.value' @change = 'filterCars()'>
    <option  v-for='opt in selectBrand.options'
    :value="opt">{{opt}}</option>
  </select>
  <select name="select-price" id="select-price" v-model='selectPrice.value' @change = 'filterCars()'>
    <option  v-for='opt in selectPrice.options'
    :value="opt">{{opt}}</option>
  </select>
</header>