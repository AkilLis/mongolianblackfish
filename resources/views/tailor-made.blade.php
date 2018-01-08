@extends('layouts.index-layout', ['currentView' => 'index-page'])
@section('content') 
    <div id="scene" style="position: relative;">
        <div class="cover-text">
            <h1 class="cover-text-header">
                TAIMEN<br />ADVENTURE
            </h1>
        </div>
        <div data-depth="1.00" class="row cover-image" style="background-image:url('/images/cover.jpg')">
        </div>
        <div class="container" style="padding-bottom: 80px;">
    		<form>
    			</br>
    			<h1 class="white">Tailormade Tours</h1>
				</br>
    			<h4 class="white" style="line-height: 1.5em;">
    				Our bespoke itinerary design service provides unique tailormade Mongolia tours to suit your own particular requirements.
We love coming up with new ideas or twists on old favourites to ensure that your Mongolia experience is truly personalised and unique. Whether you have a blank canvas or ideas set in stone about what you would like to do, our team of Mongolia travel experts can make it happen. We have extensive experience in providing bespoke Mongolia tours for a range of traveller categories – here are a few who often benefit from tailor-made Mongolia travel solutions, and a few ideas of how we might tailor a trip to suit specific needs.
    			</h4>
	    		</br>
	    		<h1 class="white">
	    			 Do you want tailermade tour?
	    		</h1>
	    		</br>
	    		<div class="col-sm-12 padding-less">
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">First name</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First name">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Last name</label>
					    <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Last name">
					  </div>

					  <div class="form-group col-md-6">
					    <label for="exampleInputEmail1" class="white">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					  </div>
					  <div class="form-group col-md-6">
					  	<label for="exampleInputPassword1" class="white">Gender</label></br>
					  	<div class="btn-group" role="group" aria-label="Basic example">
	  						<button type="button" class="btn btn-secondary">Male</button>
	  						<button type="button" class="btn btn-secondary btn-primary">Female</button>
					  	</div>
					  </div>

					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Country</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First name">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">City</label>
					    <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Last name">
					  </div>

					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Address</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First name">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Phone</label>
					    <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Last name">
					  </div>

					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Any Alergy</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First name">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Alergy description</label>
					    <textarea type="Text" class="form-control" id="exampleInputPassword1" placeholder="Last name">
					    </textarea>
					  </div>

					  <div class="form-group col-md-6">
					  	<label for="exampleInputPassword1" class="white">Which places would you like to visit?</label></br>
					  	<select class="btn-group" role="group" aria-label="Basic example">
	  						<option>Tengis & shishged river, Khuvsgul province</option>
	  						<option>Orkhon, Uvurkhangai province</option>
	  						<option>Khalkh gol, Dornod province</option>
					  	</select>

					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="white">How many of you are Travelling</label>
					    <input type="Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number">
					    
					  </div>
					  <button type="submit" class="btn btn-primary" style="width: 120px; margin-top: 10px;">Send</button>
				</div>
			</form>
    	</div>
    </div>
@stop