const app = new Vue({
  el: "#app",
  data: () => ({
    dischi: [],
  }),
  created() {
    axios.get("/api.php").then((res) => {
      this.dischi = res.data;
    });
  },
});
