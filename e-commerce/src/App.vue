<template>
  <div id="Homeview">
    <header/>
    <router-view />
  </div>
</template>

<script>
import Header from './components/Header.vue';

export default {
  name: "App",
  components:{
    Header
  }
}
</script>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
</style>