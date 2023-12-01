const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "server.php",
      todolist: [],
      newTask: "",
    };
  },
  methods: {},

  mounted() {},
}).mount("#app");
