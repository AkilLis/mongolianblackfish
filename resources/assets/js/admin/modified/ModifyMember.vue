<template>
	<div class="row" id="country-panel">
		<div class="col-md-12">
			<div class="card">
				<div class="header" style="padding-left: 20px;">
					<h4 class="title">Add New Member
						
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
						<div id="country-name" class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>First name</label>
									<input class="form-control" v-model="item.first_name" 
									id="first_title" type="text" placeholder="First name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Last name</label>
									<input class="form-control" v-model="item.last_name" 
									id="last_title" type="text" placeholder="Last name">
								</div>
							</div>
						</div>

						<div id="country-name" class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Position</label>
									<input class="form-control" v-model="item.role" 
									id="role" type="text" placeholder="role">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Major</label>
									<input class="form-control" v-model="item.major" 
									id="major" type="text" placeholder="major">
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
								<div class="col-md-12">
									<div class="form-group">
										<label>Facebook link</label>
										<input class="form-control" v-model="item.facebook_link" 
										id="facebook" type="text" placeholder="facebook">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Twitter link</label>
										<input class="form-control" v-model="item.twitter_link" 
										id="twitter" type="text" placeholder="twitter">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Email link</label>
										<input class="form-control" v-model="item.mail" 
										id="email" type="text" placeholder="email">
									</div>
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
				item : {
					first_name : '',
					last_name : '',
					role : '',
					major: "",
					facebook_link: "",
					twitter_link: "",
					mail: "",
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

			$('#river_title').focus()
		},

		methods : {
			setData : function () {
				this.item.first_name = this.editable.first_name
				this.item.last_name = this.editable.last_name
				this.item.role = this.editable.role
				this.item.major = this.editable.major
				this.item.facebook_link = this.editable.facebook_link
				this.item.twitter_link = this.editable.twitter_link
				this.item.mail = this.editable.mail
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
				if(!this.item.first_name.trim()) {
					this.$notify({
					  group: 'foo',
					  title: 'Warning',
					  type: 'warn',
					  text: 'Please fill first name.'
					});
					$('#first_title').focus()
		            return
				}

				if(!this.item.last_name.trim()) {
					this.$notify({
					  group: 'foo',
					  title: 'Warning',
					  type: 'warn',
					  text: 'Please fill last name.'
					});
					$('#last_title').focus()
		            return
				}

				if(!this.item.role.trim()) {
					this.$notify({
					  group: 'foo',
					  title: 'Warning',
					  type: 'warn',
					  text: 'Please fill role.'
					});
					$('#role').focus()
		            return
				}

				if(!this.item.major.trim()) {
					this.$notify({
					  group: 'foo',
					  title: 'Warning',
					  type: 'warn',
					  text: 'Please fill major.'
					});
					$('#major').focus()
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

				fd.append('first_name', this.item.first_name)
				fd.append('last_name', this.item.last_name)
				fd.append('major', this.item.major)
				fd.append('role', this.item.role)
				//fd.append('cover', this.item.url)
				fd.append('facebook_link', this.item.facebook_link)
				fd.append('twitter_link', this.item.twitter_link)
				fd.append('mail', this.item.mail)

				if(this.editable) {
					fd.append('_method', 'PATCH');
				}	

				var data = {
					item : this.item,
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
		height: 300px;
		object-fit: cover;
		width: 300px;
		margin-top: 20px;
		border-radius: 150px;
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