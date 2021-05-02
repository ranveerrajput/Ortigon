<template>
  <div class="about">
    <h1>This is an about page</h1>
     <h1>Counter value is local: {{counter}}</h1>
     
  </div>
</template>

<script>
export default {
  created(){
    this.counter = this.$store.globalCounter
  }
}
</script>
