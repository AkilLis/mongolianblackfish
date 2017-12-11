import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

import river from './components/river'

export default new Vuex.Store({
  // actions,
  // getters,
  modules: {
    river,
    //products
  },
  //strict: debug,
  //plugins: debug ? [createLogger()] : []
})