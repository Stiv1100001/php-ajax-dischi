const app = new Vue({
  el: "#app",
  data: () => ({
    dischi: [],
  }),
  created() {
    axios.get("/php-ajax-dischi/api.php").then((res) => {
      this.dischi = res.data;
    });
  },
});
