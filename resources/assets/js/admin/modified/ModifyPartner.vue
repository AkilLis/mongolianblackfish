<template>
	<div class="row" id="country-panel">
		<div class="col-md-12">
			<div class="card">
				<div class="header" style="padding-left: 20px;">
					<h4 class="title">Add Partner
						
					<a v-if="saving" class="btn btn-fill btn-success pull-right">
						<i class="fa fa-spinner fa-spin"></i>
						Processing
					</a>

					<a v-if="!saving" @click="save()" class="btn btn-fill btn-success pull-right" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Save</a>

					<a @click="cancel()" style="margin-right: 10px;" class="btn btn-info btn-fill btn-warning pull-right">Back</a>
					</h4>
				</div>
				<div class="content">
					<form enctype="multipart/form-data">
						<div id="partner-name" class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Partner name</label>
									<input class="form-control" v-model="partner.name" 
									id="partner_name" type="text" placeholder="Partner name">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="backId" class="btn btn-info btn-fill btn-warning">Choose cover photo</label>
									</br>
									<input id="backId" name="cover" type="file"/>
									<img id="backImage" 
										 class="back--temp" 
										 src="http://www.mongolianblackfish.com/images/trip/placeholder.jpg" 
										 alt="Cover"
									/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Partner link</label>
									<input class="form-control" v-model="partner.link" 
									id="partner_link" type="text" placeholder="Partner link">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	//require('bootstrap-datetimepicker')
	import moment from 'moment'

	export default {
		props : {
			editable : {},
			saving: false,
		},

		data () {
			return {
				partner : {
					name : '',
					link: '',
				},
			}
		},

		mounted : function () {
			var vm = this
		    $("#backId").change(function(){
		        vm.backImageChanged(this)
		    })
		    if(this.editable) {
				this.setData()
			}

			$('#partner_name').focus()
		},

		methods : {
			setData : function () {
				this.partner.name = this.editable.name
				this.partner.link = this.editable.link
				$('#backImage').attr("src", this.editable.url)
			},

			backImageChanged : function (input) {
				var reader = new FileReader();
            	
	            reader.onload = function (e) {
	                $('#backImage').attr('src', e.target.result);
	            }
	            
	            reader.readAsDataURL(input.files[0]);
			},

			cancel : function () {
				this.$emit('cancel')
			},
			save : function () {
				if(!this.partner.name.trim()) {
					this.$notify({
					  group: 'foo',
					  title: 'Warning',
					  type: 'warn',
					  text: 'Please fill name.'
					});
					$('#partner_name').focus()
		            return
				}

				if(!this.partner.link.trim()) {
					this.$notify({
					  group: 'foo',
					  title: 'Warning',
					  type: 'warn',
					  text: 'Please fill link.'
					});
					$('#partner_link').focus()
		            return
				}

				if(!$('#backId')[0].files[0] && !this.editable) {
					this.$notify({
					  group: 'foo',
					  title: 'Warning',
					  type: 'warn',
					  text: 'Choose cover picture !'
					});
		            return
				}

				this.saving = true

		  		var fd = new FormData()

				if($('#backId')[0].files[0])
					fd.append('cover', $('#backId')[0].files[0])

				fd.append('name', this.partner.name)
				fd.append('link', this.partner.link)

				if(this.editable) {
					fd.append('_method', 'PATCH');
				}	

				var data = {
					partner : this.partner,
					formData : fd,
				};

				if(this.editable) {
					this.$emit('update', data)
					return
				}
				
				this.$emit('save', data)
			}
		}
	}
</script>
<style lang="scss">
	.flag--temp {
		width: 150px;
		height: 100px;
	}
	.back--temp {
		height: 360px;
		object-fit: cover;
		width: 360px;
		margin-top: 20px;
		border-radius: 180px;
	}
	#backId {
		display: none;
	}
	#flagId {
		display: none;
	}
	.navbarr-fixed {
  		position: fixed;
	}

</style>