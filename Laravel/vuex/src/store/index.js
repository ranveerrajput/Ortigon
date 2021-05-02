import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  // all the global variale are stored and decleared here
  state: {
    globalCounter :''
  },

  getters: {
    getCounterValue(state){
      return state.globalCounter
    }
  },

  mutations: {
    //it always takes two arguments
    ADD_COUNTER(state,data){
      state.globalCounter = data 
    }
  },

  actions: {
  },
  // modules: {
  // }
})
