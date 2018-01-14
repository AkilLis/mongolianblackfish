@extends('layouts.index-layout', ['currentView' => 'index-page'])
@section('content') 
    <div id="scene" style="position: relative;">
        <div data-depth="1.00" class="row cover-image-nav" style="background-image:url('/images/cover.jpg')" >
        </div>
        <div class="container" style="padding-bottom: 80px;">
    		<form>
    			</br>
    			<h1 class="white text-center">Our team</h1>
				</br>
    			<h4 class="white" style="line-height: 1.5em;">
    				We’ve been fly-fishing for Mongolian taimen longer than just about anyone.  Our founders started fly-fishing in Mongolia  back in 1991.  We have dozens of boats.  Our remote fly-fishing camps provide access to hundreds of miles of Mongolian rivers.  There is no one better staffed and equipped for this kind of trip.
    			</h4>
	    		</br>
	    		</br>
	    		</br>
	    		<member-list>
	    		</member-list>
			</form>
			</br>
			</br>
			</br>
    	</div>
    </div>
@stop