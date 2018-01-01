<script>
	import ModifyTour from './modified/ModifyTour.vue'

	export default {
		props : {
			title : {},
		},

		data () {
			return {
				tours : [],
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
				axios.get('http://localhost:8000/admin/tour/all').then(res => {
				  	this.tours = res.data.result.data
				}).catch(err => {
				});
			},

			cancelTour : function () {
				this.showTourModify = false
			},

			editTour : function (data) {
				$('#loader').modal('show')

				this.$http.post(this.$env.get('APP_URI') + 'admin/country/' 
					+ this.selectedCountry.id + '?data=' + data.param, 
					data.formData
				).then(res => {
					if(res.data.code == 0) {
						$('#loader').modal('hide')
						this.countryInstance.name = res.data.country.name
						this.countryInstance.flag_url = res.data.country.flag_url
						this.showCountryModify = false		
						this.$root.$refs.notify.notify(res.data.message,{
							closeable : false
						})
					}
				}).catch(err => {
					$('#loader').modal('hide')
					this.$root.$refs.notify.notify('Хадгалах явцад алдаа.',{
						closeable : false
					})
				});
			},

			saveTour : function (data) {
				//$('#loader').modal('show')

				axios.post('http://localhost:8000/admin/tour?data=' + data.param, 
					data.formData
				).then(res => {
					if(res.data.code == 0) {

						//$('#loader').modal('hide')
						this.tours.push(res.data.tour)
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
			},

			setTour : function (tour) {
				this.selectedTour = tour
			},

			updateTour : function (tour) {
				this.tourInstance = tour
				this.$http.get(this.$env.get('APP_URI') + 'admin/country/' + country.id + '/edit').then(res => {
				  	this.selectedCountry = res.data.result
				  	this.showCountryModify = true
				}).catch(err => {

				});
			},

			deleteTour : function () {
				axios.delete('http://localhost:8000/admin/tour/' + this.selectedTour.id).then(res => {
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