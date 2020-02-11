console.log("linked vue");
import Home from "./components/Home.js";
import Register from "./components/Register.js";

const routes = [
  { path: "/register", name: "Register", component: Register },
  { path: "/", name: "Home", component: Home }
];

const router = new VueRouter({
  routes
});

new Vue({
  //   render: h => h(App),
  router
}).$mount("#app");
