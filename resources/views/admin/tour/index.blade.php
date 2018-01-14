@extends('layouts.admin-layout', ['currentView' => 'tour-view'])
@section('content')	
	<div>
	<modify-tour 
		v-if="showTourModify" 
		:editable.sync="selectedTour"
		:saving.sync="savingTour"
		@save="saveTour"
		@update="editTour"
		@cancel="cancelTour">
	</modify-tour>
	    <div id="myModal1" class="modal" data-easein="fadeIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	      <div class="modal-dialog">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	            <h4 class="modal-title" id="myModalLabel"></h4>
	          </div>
	          <div class="modal-body">	          	
	            <span>Do you want to delete that tour?</span>
	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger btn-fill" data-dismiss="modal" aria-hidden="true">No</button>
	            <button @click="deleteTour()" data-dismiss="modal" aria-hidden="true" class="btn btn-success btn-fill">Yes</button>
	          </div>
	        </div>
	      </div>
	    </div>

		<div v-show="!showTourModify" v-cloak>
			<div class="col-md-12">
				<div class="card">
			        <div class="header">
			            <h4 class="title">
			            	Tour list
							<a @click="newTour()" class="btn btn-info btn-fill btn-warning pull-right">
								Add New Tour
							</a>
			            </h4>
			        </div>
			    	</br>
			    	</br>
			        <div class="row">
		        		<div class="col-md-6" v-for="tour in tours">
		        			<div class="tour-box card">
		        				<img 
		        					:src="tour.url"
		        					style="object-fit: cover; width:100%; border-top-right-radius: 5px; border-top-left-radius: 5px;"
		        					height="300"
		        				>

		        				<div style="padding: 30px;">
				        			<div class="row">
				        				<div class="col-md-9">
						        			<h2 style="word-wrap: break-word; margin-top: 0px;">@{{tour.name}}</h2>
						        		</div>
					        			<div class="col-md-3 row" style="padding-right: 0px;">
					        				<div class="col-md-6" style="padding-right: 0px; text-align: right;">
						        				<a class="orange-link" @click="updateTour(tour)">
					                    			<i class="fa fa-edit" style="font-size: 25px; "></i>
					                    		</a>
					                    	</div>
					                    	<div class="col-md-6" style="padding-right: 0px; text-align: right;">
							                    <a class="orange-link" @click="setTour(tour)" href="#myModal1" data-target="#myModal1" data-toggle="modal">
					                    			<i class="fa fa-trash" style="font-size: 25px; "></i>
					                    		</a>
					                    	</div>
					        			</div>
					        		</div>
				        			<h4>@{{tour.river.name}}</h4>
				        			<h4>Deparute Date: @{{tour.departure_date}}</h4>

				        			</br>	
				        			<div class="row">
				        				<div class="col-md-4">
						        			<i class="fa fa-eye"></i> @{{tour.visit_count}}  
						        		</div>
						        		<div class="col-md-4">
						        			<i class="fa fa-users"></i> @{{tour.group_size}}  
						        		</div>
						        		<div class="col-md-4">
						        			<a :href="'tour/'+ tour.id + '/gallery'" class="btn btn-info btn-fill btn-warning pull-right">
							        			<i class="fa fa-picture-o"></i> @{{tour.photos_count}}  
							        		</a>
						        		</div>
					        		</div>
					        	</div>
			        		</div>
		        		</div>
		        	</div>
			    </div>
			</div>
		</div>
	</div>
@stop