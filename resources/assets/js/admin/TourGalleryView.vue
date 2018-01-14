<script>
	import ModifyTourGallery from './modified/ModifyTourGallery.vue'
	import config from '../env'

	export default {
		props : {
			title : {},
		},

		data () {
			return {
				tour_id: 0,
				items : [],
				saving: false,
				showModify : false,
				selected : {},
				instance : {}
			}
		},

		created : function () {
			//alert($('#tour_id').val())
			this.tour_id = $('#tour_id').val()
			this.getItems()
		},

		methods : {
			getItems : function () {
				axios.get(config.API_KEY + 'admin/tour/' + this.tour_id + '/gallery/all').then(res => {
				  	this.items = res.data.result
				}).catch(err => {
				});
			},

			onCancel : function () {
				this.showModify = false
			},

			onEdit : function (data) {
				//$('#loader').modal('show')
				this.saving = true
				axios.post(config.API_KEY + 'admin/river/' 
					+ this.selected.id + '?data=' + data.param, 
					data.formData
				).then(res => {
					if(res.data.code == 0) {
						this.instance.name = res.data.river.name
						this.instance.url = res.data.river.url
						this.showModify = false	
						this.saving = false	
						this.$notify({
						  group: 'foo',
						  title: 'Success',
						  type: 'success',
						  text: res.data.message
						});
					}
				}).catch(err => {
					this.saving = false
					this.$notify({
						  group: 'foo',
						  title: 'Success',
						  type: 'success',
						  text: "Хадгалах явцад алдаа гарлаа"
					});
				});
			},

			onSave: function (data) {
				//$('#loader').modal('show')
				this.saving = true
				axios.post(config.API_KEY + 'admin/tour/' + this.tour_id + '/gallery/store', 
					data.formData
				).then(res => {
					if(res.data.code == 0) {
						let photo = Object.assign({
							pivot: {
								caption: data.photo.caption
							}
						}, res.data.photo)

						this.items.push(photo)
						this.showModify = false	
						this.saving = false	
						this.$notify({
						  group: 'foo',
						  title: 'Success',
						  type: 'success',
						  text: res.data.message
						});
					}
				}).catch(err => {
					this.saving = false
					this.$notify({
						  group: 'foo',
						  title: 'Success',
						  type: 'success',
						  text: "Хадгалах явцад алдаа гарлаа"
					});
				});
			},

			newItem: function () {
				this.showModify = true
				this.selected = null
				this.saving = false
			},

			setItem : function (item) {
				this.selected = item
			},

			deleteItem : function () {
				axios.delete(config.API_KEY + 'admin/tour/' + this.tour_id + '/gallery/delete/' + this.selected.id).then(res => {
					if(res.data.code == 0) {
						this.items.splice(this.items.indexOf(this.selected), 1)
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
			ModifyTourGallery
		}
	}
</script>