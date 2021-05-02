<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <center>
          <button @click="increment()">Click me</button>
          <button @click=" counter = 0">Reset</button>
          <div>
            <h1>Count:{{ counter }}</h1>
            <h1>Golbal Count:{{ getCounterValueFromstore }}</h1>

          </div>

   </center>
  </div>
</template>

<script>
// @ is an alias to /src


export default {
  name: 'Home',
  components: {
    
  },  
  data(){
    return{
      counter:0
    }
  },

  computed :{
    getCounterValueFromstore(){
      return this.$store.getters['getCounterValue'];
    }
  },

  // created(){
  //   this.counter = this.$store.globalCounter
  // },
  //updation : adding/removing/updating 
  methods:{
    increment(){
      this.counter++
      //Data store in global vue store
      //whenwver er need to add something in our store we must wrirte a mutation function
      //to store the data we use the commit 
      this.$store.commit('ADD_COUNTER',this.counter)
    }
  }
}
</script>
