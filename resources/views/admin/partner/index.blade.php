@extends('layouts.admin-layout', ['currentView' => 'partner-view'])
@section('content')	
	<div>
	<modify-partner 
		v-if="showModify" 
		:editable.sync="selected"
		:saving.sync="saving"
		@save="onSave"
		@update="onEdit"
		@cancel="onCancel"
	>
		
	</modify-partner>

	    <div id="myModal1" class="modal" data-easein="fadeIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	      <div v-if="selected" class="modal-dialog">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	            <h4 class="modal-title" id="myModalLabel"></h4>
	          </div>
	          <div class="modal-body">
	          	<div class="text-center">
		          	<span v-if="selected.tours_count > 0">
		          		This ride belongs to @{{selected.tours_count}} tours 
		          	</span>
		          	</br>
		            <span>Do you want to delete that river?</span>
		        </div>
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
			            	Partners list
							<a @click="newItem()" class="btn btn-info btn-fill btn-warning pull-right">
								Add Partner
							</a>
			            </h4>
			        </div>

			        <div class="content table-responsive table-full-width">
			            <table class="table table-hover table-striped">
			                <thead>
			                    <tr>
				                    <th>Name</th>
				                	<th style="width: 120px;">Link</th>
				                	<th style="width: 120px;">Photo</th>
				                	<th style="width: 80px;">Edit</th>
				                	<th style="width: 80px;">Delete</th>
			                	</tr>
			            	</thead>
			                <tbody>
								<tr v-for="item in items">
			                    	<td>@{{item.name}}</td>
			                    	<td>@{{item.link}}</td>
			                    	<td>
			                    		<img 
			                    			:src="item.url"
			                    			height="60"
			                    			width="40" 
			                    			style="object-fit: cover;"
			                    		/>
			                    	</td>
			                    	<td>
			                    		<a class="orange-link" @click="updateItem(item)">
			                    			<i class="fa fa-edit"></i>
			                    		</a>
			                    	</td>
			                    	<td>
			                    		<a class="orange-link" @click="setItem(item)" href="#myModal1" data-target="#myModal1" data-toggle="modal">
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