import * as types from './RiverConstant'
import * as actions from './RiverActions'

const state = {
  rivers: {
  	fetching: false,
  	data: []
  },
  selectedRiver: {},
  tours: {
  	fetching: false,
  	data: []
  }
}

const getters = {
  allRivers: state => {
  	return state.rivers
  },
  tours: state => {
  	return state.tours
  },
  tours_fetching: state => {
  	return state.tours.fetching
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

	[types.GET_RIVER_TOURS] (state) {
		state.tours.fetching = true
	},

	[types.GET_RIVER_TOURS_FULFILLED] (state, { tours }) {
		state.tours.fetching = false
		tours.forEach((tour) => {
			tour.context = 'trip-slide'
		})
		state.tours.data = tours
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