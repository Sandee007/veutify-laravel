<template>
  <div>
    <v-app-bar 
      app
      color="blue"
      collapse-on-scroll=""
      dark
      :src="bg"
    > 

      <v-app-bar-nav-icon @click="drawer = !drawer" ></v-app-bar-nav-icon>

      <v-toolbar-title>
        <h1>Title</h1>
      </v-toolbar-title>

      <v-spacer></v-spacer>

      <v-btn rounded dark text > Sign out
        <v-icon right> exit-to-app </v-icon>
      </v-btn>

    </v-app-bar>

    <v-navigation-drawer
      app
      class="blue"
      v-model="drawer"
      :src="bg"
    >
      <v-list rounded >
        <v-list-item ripple exact-active-class
        v-for="(item,index) in dashboardItems"  :key="index"
        router :to="item.route"
        >

          <v-list-item-icon>
            <v-icon class="white--text">{{item.icon}}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title class="white--text" >{{item.text}}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

      </v-list>
    </v-navigation-drawer>

  </div>
  
</template>

<script>
export default {
  data() {
    return {
      drawer:false,
      background: true,
      dashboardItems: [
        {text: 'Dashboard', icon: 'mdi-view-dashboard', route: '/'},
        {text: 'My Projects', icon: 'mdi-folder', route: '/projects'},
        {text: 'Team Members', icon: 'mdi-account-group', route: '/team'},
      ]
    }
  },
  computed:{
    bg () {
      return this.background ? 'https://cdn.vuetifyjs.com/images/backgrounds/bg-2.jpg' : undefined
    }
  }
}
</script>

<style>

</style>