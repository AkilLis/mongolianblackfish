<template>
	<div class="row" id="country-panel">
		<div class="col-md-12">
			<div class="card">
				<div class="header" style="padding-left: 20px;">
					<h4 class="title">Add New Tour
						
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
							<div class="col-md-9">
								<div class="form-group">
									<label>Tour title</label>
									<input class="form-control" v-model="tour.name" 
									id="tour_title" type="text" placeholder="Tour title">
								</div>
							</div>
							<div class="col-md-3">
								<label for="sel1">Choose river</label>
							    <select class="form-control" id="sel1" v-model="tour.river_id">
							    	<option 
							    		v-for="(river, index) in rivers"
							    		v-bind:value="river.id"
							    	>
							    		{{river.name}}
							    	</option>
							    </select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Tour type</label>
									<input id="tour_type" class="form-control" v-model="tour.type" type="text" placeholder="Tour type">
								</div>
							</div>
							<div class="col-md-3">
								<label for="sel1">Group Size</label>
							    <input class="form-control" v-model="tour.group_size" type="number" placeholder="Tour group size">
							</div>
							<div class="col-md-3">
								<label for="sel1">Price</label>
								<input class="form-control" v-model="tour.price" type="number" placeholder="Tour price">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Departure Date</label>
									<div class='input-group date' id='departure_date'>
					                    <datepicker 
					                    	v-model="tour.departure_date" 
					                    	input-class="form-control"
					                    	name="departure_date">
					                    </datepicker>
					                </div>
								</div>
							</div>
							<div class="col-md-3">
								<label for="sel1">Start Date</label>
							    <div class='input-group date' id='departure_date'>
				                    <datepicker 
				                    	v-model="tour.start_date" 
				                    	input-class="form-control"
				                    	name="start_date">
				                    </datepicker>
				                </div>
							</div>
							<div class="col-md-3">
								<label for="sel1">End Date</label>
							    <div class='input-group date' id='departure_date'>
				                    <datepicker 
				                    	v-model="tour.end_date" 
				                    	input-class="form-control"
				                    	name="end_date">
				                    </datepicker>
				                </div>
							</div>
						</div>
						<div id="country-name" class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Tour Map Url</label>
									<input id="tour_map" class="form-control" v-model="tour.map_url" type="text" placeholder="Tour map url">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="backId" class="btn btn-info btn-fill btn-warning">Choose cover photo</label>
									<input id="backId" name="cover" type="file"/>
									<img id="backImage" 
										 class="back--temp" 
										 src="http://localhost:8000/images/trip/placeholder.jpg" 
										 alt="Cover"
									/>
								</div>
							</div>
						</div>
						<div id="country-name" class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<input class="form-control" v-model="tour.description" 
									id="tour_description" type="text" placeholder="Tour description">
								</div>
							</div>
						</div>
						<div id="country-info" class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>More information</label>
									<custom-editor ref="info" 
									              :titleable="false" 
									              :html="getEditorContent('info')">
									</custom-editor>
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
				rivers: [{
					id: 1,
					name: "Sheshged",
				}, {
					id: 2,
					name: "Orkhon"
				}, {
					id: 3,
					name: "Eg uur",
				}],
				tour : {
					river_id: 1,
					name : '',
					group_size: 0,
					price: 0,
					type: "",
					departure_date:  new Date(),
					start_date:  new Date(),
					end_date:  new Date(),
					map_url: "",
					//departure_date
				},
				//y_pos : {},
				//x_pos: {},
				//menu : 'country-name'
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

			$('#tour_title').focus()
		},

		methods : {
			setData : function () {
				this.tour.name = this.editable.name
				this.tour.river_id = this.editable.river_id
				this.tour.price = this.editable.price
				this.tour.group_size = this.editable.group_size
				this.tour.type = this.editable.type
				this.tour.departure_date = this.editable.departure_date
				this.tour.start_date = this.editable.start_date
				this.tour.end_date = this.editable.end_date
				this.tour.map_url = this.editable.map_url
				this.tour.description = this.editable.info[0].description
				$('#backImage').attr("src", this.editable.url)
			},

			getEditorContent : function () {
				if(!this.editable || this.editable.info === null) {
					return
				}
				
				return this.editable.info[0].content
				// if(!this.editable) {
				// 	return
				// }

				// switch(type) {
				// 	case "info" : 
				// 		return this.editable.country_information[0].content
				// 		break
				// 	case "education" : 
				// 		return this.editable.country_education[0].content
				// 		break
				// 	case "visa" : 
				// 		return this.editable.country_visa[0].content
				// 		break
				// }
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
				if(!this.tour.name.trim()) {
					this.$notify({
					  group: 'foo',
					  title: 'Warning',
					  type: 'warn',
					  text: 'Please fill title.'
					});
					$('#tour_title').focus()
		            return
				}

				if(!this.tour.type.trim()) {
					this.$notify({
					  group: 'foo',
					  title: 'Warning',
					  type: 'warn',
					  text: 'Please fill tour type.'
					});
					$('#tour_type').focus()
		            return
				}

				if(!this.tour.map_url.trim()) {
					this.$notify({
					  group: 'foo',
					  title: 'Warning',
					  type: 'warn',
					  text: 'Please fill map url.'
					});
					$('#tour_map').focus()
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

				fd.append('name', this.tour.name)
				fd.append('river_id', this.tour.river_id)
				fd.append('price', this.tour.price)
				fd.append('group_size', this.tour.group_size)
				fd.append('type', this.tour.type)
				fd.append('departure_date', moment(this.tour.departure_date).format("YYYY-MM-DD"))
				fd.append('start_date', moment(this.tour.start_date).format("YYYY-MM-DD"))
				fd.append('end_date', moment(this.tour.end_date).format("YYYY-MM-DD"))
				fd.append('map_url', this.tour.map_url)
				fd.append('description', this.tour.description)
				fd.append('tour_info', this.$refs.info.getContent())

				if(this.editable) {
					fd.append('_method', 'PATCH');
				}	

				var data = {
					tour : this.tour,
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
		width: 100%;
		margin-top: 20px;
		border-radius: 15px;
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