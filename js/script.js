const app = new Vue({
  el: '#app',
  data: {
    db: [],
  },
  created() {
    axios.get('http://localhost/php-snacks-b1/server/controller.php').
    then((result) => {
      this.db = result.data;
      console.log(this.db);
    }).catch((err) => {
      console.log(err);
    });
  }
})