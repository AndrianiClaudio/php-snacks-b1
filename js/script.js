const app = new Vue({
  el: '#app',
  data: {
    db: [],
    carsInfo :[],
    car: [],
    selectBrand: {
      value: 'all',
      options: ['all',],
    },
    filterCarsInfo: [],
  },
  methods: {
    // getOptions() {
    //   // console.log('ok');
    //   // console.log(this.db);
    //   this.db.foreach((el,index) => {
    //     console.log(el,index);
    //     this.selectBrand.options.push(el);
    //   });
    //   console.log(this.selectBrand.options);
    // },
    getCar(i) {
      // console.log(i);
      this.car = this.db[i];
      return this.car;
    },
    getDb () {
      axios.get('http://localhost/php-snacks-b1/server/controller.php').
      then((result) => {
        this.db = result.data;
        // filtra elementi con dati necessari attualmente alla concessionaria. salvati in carsInfo
        this.db.forEach(el => {
          this.carsInfo.push ({
            brand: el.Marca,
            generation: el.Generazione,
            imgPath: el.Immagine,
            cv: el.Potenza,
            displacement: el.Cilindrata,
            price: el.Prezzo,
            supply: el.Alimentazione,
          });
        });
      }).catch((err) => {
        // errore durante interazione db(possibile connessione mancante, funziona)
        console.error(err);
      })
      .then(() => {
        this.filterCarsInfo = this.carsInfo;
        this.db.forEach((el) => {
          // console.log(el,index);
          if(!this.selectBrand.options.includes(el.Marca)) {
            this.selectBrand.options.push (el.Marca);
          }
        });
        // console.log(this.selectBrand.options);
      });
    },
    filterBrand() {
      console.log(this.selectBrand.value);
      if (this.selectBrand.value == 'all') {
        this.filterCarsInfo = this.carsInfo;
      } else {
        this.filterCarsInfo = this.carsInfo.filter((el) => {
          // console.log(el.Marca == this.selectBrand.value);
          return el.brand == this.selectBrand.value;
        })
        console.log(this.filterCarsInfo);
      }
    }
  },
  created() {
    // console.log('created');
    this.getDb();
  },
  // mounted() {
  //   console.log('mounted');
  // }
})