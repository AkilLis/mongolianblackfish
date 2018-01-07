@extends('layouts.admin-layout', ['currentView' => 'tour-view'])
@section('content')	
	<div>
	<modify-tour v-if="showTourModify" 
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
			        <div class="content table-responsive table-full-width">
			            <table class="table table-hover table-striped">
			                <thead>
			                    <tr><th>Title</th>
			                	<th style="width: 120px;">River</th>
			                	<th style="width: 80px;">Group Size</th>
			                	<th style="width: 80px;">Departure Date</th>
			                	<th style="width: 80px;">Total Seen</th>
			                	<th style="width: 80px;">Edit</th>
			                	<th style="width: 80px;">Delete</th>
			                </tr></thead>
			                <tbody>
								<tr v-for="tour in tours">
			                    	<td>@{{tour.name}}</td>
			                    	<td>@{{tour.river.name}}</td>
			                    	<td>@{{tour.group_size}}</td>
			                    	<td>@{{tour.departure_date}}</td>
			                    	<td>@{{tour.visit_count}}</td>
			                    	<td>
			                    		<a class="orange-link" @click="updateTour(tour)">
			                    			<i class="fa fa-edit"></i>
			                    		</a>
			                    	</td>
			                    	<td>
			                    		<a class="orange-link" @click="setTour(tour)" href="#myModal1" data-target="#myModal1" data-toggle="modal">
			                    			<i class="fa fa-trash"></i>
			                    		</a>
			                    	</td>
			                    </tr>   	
			                </tbody>
			            </table>
			        </div>
			    </div>
			</div>
		</div>
	</div>
@stop