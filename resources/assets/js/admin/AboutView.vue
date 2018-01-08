<script>
	import ModifyMember from './modified/ModifyMember.vue'
	import config from '../env'

	export default {
		props : {
			title : {},
		},

		data () {
			return {
				items : [],
				saving: false,
				showModify : false,
				selected : {},
				instance : {}
			}
		},

		created : function () {
			this.getItems()
		},

		methods : {
			getItems : function () {
				axios.get(config.API_KEY + 'admin/about/members').then(res => {
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
				axios.post(config.API_KEY + 'admin/about/' 
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
				axios.post(config.API_KEY + 'admin/about?data=' + data.param, 
					data.formData
				).then(res => {
					if(res.data.code == 0) {

						var river = Object.assign({ tours_count: 0, }, res.data.river)

						this.items.push(river)
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

			updateItem : function (item) {
				this.instance = item
				axios.get(config.API_KEY + 'admin/about/' + item.id + '/edit').then(res => {
				  	this.selected = res.data.result
				  	this.showModify = true
				}).catch(err => {

				});
			},

			deleteItem : function () {
				axios.delete(config.API_KEY + 'admin/about/' + this.selected.id).then(res => {
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
			ModifyMember
		}
	}
</script>