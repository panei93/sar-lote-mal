<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">Laravel Vue CRUD Example</span>
        </div>
 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Home</router-link>
                    <router-link to="/add" class="nav-item nav-link">Add Post</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>
 
<script>
    export default {}
</script>

<template>
    <layout>
      <div slot="header">
        <top-bar></top-bar>
      </div>
      <div slot="nav" class="vbox h-100">
        <side-bar></side-bar>
      </div>
      <div slot="footer">
        vue-layout
      </div>
      <div slot="article">
        <router-view></router-view>
      </div>
    </layout>
</template>

<script>
  import './../css/style.css'
  import Layout from './components/Layout.vue'
  import TopBar from './components/TopBar.vue'
  import SideBar from './components/SideBar.vue'
export default {
    name: 'app',
    components: {
      Layout,
      TopBar,
      SideBar
    }
}
</script>