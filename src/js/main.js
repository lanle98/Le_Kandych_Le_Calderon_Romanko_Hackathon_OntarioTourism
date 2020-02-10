console.log("linked vue");
import Home from "./components/Home.js";
import About from "./components/About.js";

const routes = [
  { path: "/about", name: "About", component: About },
  { path: "/", name: "Home", component: Home }
];

const router = new VueRouter({
  routes
});

new Vue({
  //   render: h => h(App),
  router
}).$mount("#app");
