<header class="header">
  <!-- SI VUOLE FILTRARE PER MARCA E PER FASCIA DI PREZZO -->
  <select name="select-brand" id="select-brand" v-model='selectBrand.value'>
    <option  v-for='opt in selectBrand.options'
    :value="opt">{{opt}}</option>
  </select>
</header>