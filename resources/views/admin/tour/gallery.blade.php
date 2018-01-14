@extends('layouts.admin-layout', ['currentView' => 'tour-gallery-view', ])
@section('content')	
	<div>

	<input type="hidden" id="tour_id" value="{{$tour->id}}">

	<modify-tour-gallery
		v-if="showModify" 
		:editable.sync="selected"
		:saving.sync="saving"
		@save="onSave"
		@update="onEdit"
		@cancel="onCancel">
	</modify-tour-gallery>

	    <div id="myModal1" class="modal" data-easein="fadeIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	      <div class="modal-dialog">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	            <h4 class="modal-title" id="myModalLabel"></h4>
	          </div>
	          <div class="modal-body">	          	
	            <span>Do you want to delete that photo?</span>
	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger btn-fill" data-dismiss="modal" aria-hidden="true">No</button>
	            <button @click="deleteItem()" data-dismiss="modal" aria-hidden="true" class="btn btn-success btn-fill">Yes</button>
	          </div>
	        </div>
	      </div>
	    </div>

		<div v-show="!showModify" v-cloak>
			<div class="col-md-12">
				<div class="card">
			        <div class="header">
			            <h4 class="title">
			            	Gallery
							<a @click="newItem()" class="btn btn-info btn-fill btn-warning pull-right">
								Add New Photo
							</a>
			            </h4>
			        </div>
			    	</br>
			    	</br>
			        <div class="row">
		        		<div class="col-md-4" v-for="item in items">
		        			<div class="tour-box card">
		        				<img 
		        					:src="item.url"
		        					style="object-fit: cover; width:100%; border-top-right-radius: 5px; border-top-left-radius: 5px;"
		        					height="300"
		        				>

		        				<div style="padding: 30px;">
				        			<div class="row">
				        				<div class="col-md-9">
						        			<h2 style="word-wrap: break-word; margin-top: 0px;"></h2>
						        		</div>
					        			<div class="col-md-3 row" style="padding-right: 0px;">
					                    	<div class="col-md-12" style="padding-right: 0px; text-align: right;">
							                    <a class="orange-link" @click="setItem(item)" href="#myModal1" data-target="#myModal1" data-toggle="modal">
					                    			<i class="fa fa-trash" style="font-size: 25px; "></i>
					                    		</a>
					                    	</div>
					        			</div>
					        		</div>
					        		<h4>
				        				@{{item.pivot.caption}}
				        			</h4>
					        	</div>
			        		</div>
		        		</div>
		        	</div>
			    </div>
			</div>
		</div>
	</div>
@stop