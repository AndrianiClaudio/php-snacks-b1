const app = new Vue({
  el: '#app',
  data: {
    db: [],
    cars_info :[],
  },
  created() {
    axios.get('http://localhost/php-snacks-b1/server/controller.php').
    then((result) => {
      this.db = result.data;
      // filtra elementi con dati necessari attualmente alla concessionaria. salvati in cars_info
      this.db.forEach(el => {
        this.cars_info.push ({
          fullName: el.Marca + ' ' + el.Generazione,
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
    });
  }
})