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
    selectPrice: {
      value: 'all',
      options: ['all',],
      maxPrice: null,
      rangeValue: 15000,
    },
    filterCarsInfo: [],
  },
  methods: {
    getCar(i) {
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
        //popola options
        this.selectPrice.maxPrice = this.db[0].Prezzo;
        this.db.forEach((el) => {
          if(!this.selectBrand.options.includes(el.Marca)) {
            this.selectBrand.options.push (el.Marca);
          }
          if(el.Prezzo > this.selectPrice.maxPrice) {
            this.selectPrice.maxPrice = el.Prezzo;
          }
        });
        for(let i=0;i<this.selectPrice.maxPrice;i += this.selectPrice.rangeValue) {
          this.selectPrice.options.push(`${i}-${i+this.selectPrice.rangeValue}`);
          // console.log(i,'-',i+this.selectPrice.rangeValue);
        }
        // console.log(this.selectPrice.maxPrice);
      });
    },
    // filtra macchine
    filterCars() {
      [min,max] = this.selectPrice.value.split('-');
      if(this.selectBrand.value === 'all' && this.selectPrice.value === 'all') {
        //mostra tutto
        this.filterCarsInfo = this.carsInfo;
      } else {
        if(this.selectBrand.value !== 'all' && this.selectPrice.value !== 'all') {
          //selezionati sia marca che prezzo
          this.filterCarsInfo = this.carsInfo.filter((el) => {
            return el.brand === this.selectBrand.value &&
                  el.price >= min && el.price <= max;
          })
        } else if(this.selectBrand.value !== 'all') {
          //selezionata solo marca
          this.filterCarsInfo = this.carsInfo.filter(el => {
            return el.brand === this.selectBrand.value;
          })
        }else if(this.selectPrice.value !== 'all') {
          //selezionato solo prezzo
          this.filterCarsInfo = this.carsInfo.filter(el => {
            return el.price >= min && el.price <= max;
          })
        }
      }
    },
  },
  created() {
    this.getDb();
  },
});