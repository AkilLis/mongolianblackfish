import * as types from './RiverConstant'
import * as actions from './RiverActions'

const state = {
  rivers: {
  	fetching: false,
  	data: []
  },
  selectedRiver: {}
}

const getters = {
  allRivers: state => {
  	return state.rivers
  },
  selectedRiver: state => { 
  	return state.selectedRiver
  }
}

const mutations = {
	[types.GET_RIVERS] (state) {
		state.rivers.fetching = true
	},

	[types.GET_RIVERS_FULFILLED] (state, { rivers }) {
		state.rivers.fetching = false
		state.rivers.data = rivers
		if(rivers.length > 1)
			state.selectedRiver = rivers[1]
	},

	[types.SET_RIVER] (state, { river }) {
		state.selectedRiver = river
	}
}

export default {
	state,
	getters,
	actions,
	mutations,
}