import * as types from './RiverConstant'
import axios from 'axios'

export const getRiverTours = ({ commit }, river) => {
    commit(types.GET_RIVER_TOURS)

    axios.get('http://www.mongolianblackfish.com/river/' + river.id + '/tours')
         .then(res => {
              commit(types.GET_RIVER_TOURS_FULFILLED, { tours: res.data.tours })
         })
}

export const getRivers = ({ commit }) => {

	commit(types.GET_RIVERS)
	let rivers = [{
                    id: 2,
                    name: 'Orkhon',
                    url: "http://www.mongolianblackfish.com/images/river/orkhon.jpg",
                    is_selected: false,
                }, {
                    id: 1,
                    name: "Sheshged",
                    url: "http://www.mongolianblackfish.com/images/river/shegshid.jpg",
                    is_selected: true,
                }, {
                    id: 3,
                    name: "Eg uur",
                    url: "http://www.mongolianblackfish.com/images/river/eg_uur.jpg",
                    is_selected: false,
                }]
    commit(types.GET_RIVERS_FULFILLED, { rivers })
}

export const setRiver = ({ commit }, data) => {
    commit(types.SET_RIVER, data)
}