<script>
	import ModifyTour from './modified/ModifyTour.vue'
	import config from '../env'

	export default {
		props : {
			title : {},
		},

		data () {
			return {
				tours : [],
				savingTour: false,
				showTourModify : false,
				selectedTour : {},
				tourInstance : {}
			}
		},

		created : function () {
			this.getTours()
		},

		methods : {
			getTours : function () {
				axios.get(config.API_KEY + 'admin/tour/all').then(res => {
				  	this.tours = res.data.result.data
				}).catch(err => {
				});
			},

			cancelTour : function () {
				this.showTourModify = false
			},

			editTour : function (data) {
				//$('#loader').modal('show')
				this.saving = true
				axios.post(config.API_KEY + 'admin/tour/' 
					+ this.selectedTour.id + '?data=' + data.param, 
					data.formData
				).then(res => {
					if(res.data.code == 0) {
						//$/('#loader').modal('hide')
						this.tourInstance.name = res.data.tour.name
						this.tourInstance.url = res.data.tour.url
						this.tourInstance.river.id = data.tour.river.id
						this.tourInstance.river.name = data.tour.river.name
						this.showTourModify = false	
						this.savingTour = false	
						this.$notify({
						  group: 'foo',
						  title: 'Success',
						  type: 'success',
						  text: res.data.message
						});
					}
				}).catch(err => {
					//$('#loader').modal('hide')
					this.savingTour = false
					this.$notify({
						  group: 'foo',
						  title: 'Success',
						  type: 'success',
						  text: "Хадгалах явцад алдаа гарлаа"
					});
				});
			},

			saveTour : function (data) {
				//$('#loader').modal('show')
				this.saving = true
				axios.post(config.API_KEY + 'admin/tour?data=' + data.param, 
					data.formData
				).then(res => {
					if(res.data.code == 0) {
						var tour = Object.assign({ river: data.tour.river }, res.data.tour)

						this.tours.push(tour)
						this.showTourModify = false		
						this.$notify({
						  group: 'foo',
						  title: 'Success',
						  type: 'success',
						  text: res.data.message
						});
					}
				}).catch(err => {
					//$('#loader').modal('hide')
					this.savingTour = false
					this.$notify({
						  group: 'foo',
						  title: 'Success',
						  type: 'success',
						  text: "Хадгалах явцад алдаа гарлаа"
					});
				});
			},

			newTour: function () {
				this.showTourModify = true
				this.selectedTour = null
				this.savingTour = false
			},

			setTour : function (tour) {
				this.selectedTour = tour
			},

			updateTour : function (tour) {
				this.tourInstance = tour
				axios.get(config.API_KEY + 'admin/tour/' + tour.id + '/edit').then(res => {
				  	this.selectedTour = res.data.result
				  	this.showTourModify = true
				}).catch(err => {

				});
			},

			deleteTour : function () {
				axios.delete(config.API_KEY + 'admin/tour/' + this.selectedTour.id).then(res => {
					if(res.data.code == 0) {
						this.tours.splice(this.tours.indexOf(this.selectedTour), 1)
						this.$notify({
						    group: 'foo',
						    title: 'Success',
						    type: 'success',
						    text: res.data.message
						});
					}
				}).catch(err => {
					this.$notify({
						  group: 'foo',
						  title: 'Success',
						  type: 'success',
						  text: "Хадгалах явцад алдаа гарлаа"
					});
				})
			},
		},
		components : {
			ModifyTour
		}
	}
</script>