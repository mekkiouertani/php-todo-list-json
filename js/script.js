const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "server.php",
      todolist: [],
      newTask: "",
    };
  },
  methods: {
    readList() {
      axios.get(this.apiUrl).then((response) => {
        this.todolist = response.data;
      });
    },
  },

  mounted() {
    this.readList();
  },
}).mount("#app");
