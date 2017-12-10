@extends('layouts.index-layout', ['currentView' => 'index-view'])
@section('content') 
    <div id="scene" style="position: relative;">
        
        <div class="container">
	        <div data-depth="1.00" class="row tour-cover-image text-center" style="background-image:url('/images/river/orkhon.jpg')">

	        </div>
	    </div>

	    <div class="tour-cover-text container">
            <h1 class="white" style="font-size: 48px;">Classic Canyon Tour to Shegshed</h1>
            <div class="departure-header">
            	<h3 class="white" style="margin-top: 14px;">JULY 4-12 2018</h3>
            </div>
        </div>

        <div style="height: 1000px;">
        </div>

        

        <custom-map>
        </custom-map>


        

    </div>
@stop