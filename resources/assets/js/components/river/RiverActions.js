import * as types from './RiverConstant'
import axios from 'axios'

import config from '../../env'

export const getRiverTours = ({ commit }, river) => {
    commit(types.GET_RIVER_TOURS)

    axios.get(config.API_KEY + 'river/' + river.id + '/tours')
         .then(res => {
              commit(types.GET_RIVER_TOURS_FULFILLED, { tours: res.data.tours })
         })
}

export const getRivers = ({ commit }) => {

	commit(types.GET_RIVERS)

    axios.get(config.API_KEY + 'river/get')
         .then(res => {
              commit(types.GET_RIVERS_FULFILLED, { rivers: res.data.rivers })
         })
}

export const setRiver = ({ commit }, data) => {
    commit(types.SET_RIVER, data)
}