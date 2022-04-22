const app = new Vue({
  el: "#app",
  data: () => ({
    dischi: [],
    genre: "",
  }),
  methods: {
    search() {
      axios.get("/php-ajax-dischi/api.php?genre=" + this.genre).then((res) => {
        this.dischi = res.data;
      });
    },
  },
  created() {
    axios.get("/php-ajax-dischi/api.php").then((res) => {
      this.dischi = res.data;
    });
  },
});
