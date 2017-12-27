import * as types from './RiverConstant'

export const getRivers = ({ commit }) => {

	commit(types.GET_RIVERS)
	let rivers = [{
                    id: 1,
                    name: 'Orkhon',
                    url: "http://www.mongolianblackfish.com/images/river/orkhon.jpg",
                    is_selected: false,
                }, {
                    id: 2,
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