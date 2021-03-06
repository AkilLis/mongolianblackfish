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
        <div class="member-cover-image" style="padding-bottom: 80px; padding-top: 100px; ">
            <div class="container member-cover-content">
        		<form action="/sign-member">
        			</br>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center" style="color: #FECA08">Members</h1>
                            <h1 class="white text-center">150$ PER YEAR</h1>
                            </br>
                            </br>

                            <h3 class="white" style="line-height: 1.5em;">
                                Welcome to become member for our Taimen Conservation Fund, this means supporting to Taimen Conservation work activities with research work and breeding species from Listed as Rare Species under the Mongolian Red book. Taimen is only existing most of species in North side of Mongolia, Khuvsgul province and rare in Siberia. Therefore, you are able to following benefits, when you become member
                            </h3>
                        </div>
                    </div>
                    </br>
                    </br>
        			<div class="row">
        				<div class="col-md-12">
        					<h1 style="color: #FECA08">10% discount</h1>
        					</br>
        					<h3 class="white" style="line-height: 1.5em;">We would like to recommend you to join as member of MBF team, you can get 1 coupon free to book trip with 10% discount.
        				</div>
        			</div>
        			</br>
        			</br>
                    </br>
                    </br>
        			<div class="row">
        				<div class="col-md-12">
        					<h1 style="color: #FECA08">About Coupon</h1>
        					</br>
        					<h3 class="white" style="line-height: 1.5em;">Also this coupon can offer 10% discount for your friend. Some of your membership fee will be donated in the activity of preserving and breeding this scarce-fish </h3>
        				</div>
        			</div>

                    </br>
                    </br>
                    </br>
                    </br>
                    <div class="row">
                        <div class="col-md-12">
                            </br>
                            <h3 class="white text-center" style="line-height: 1.5em;"> We happy to say, your membership amount 40% of all will be donated to in the Taimen Conversational Funds.</h3>
                        </div>
                    </div>

                    </br>
                    </br>
                    </br>
                    </br>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary" style="width: 200px; margin-right: 20px; margin-left: 20px;">
                                <h2 class="font-sub" style="color: #0d0d0d;">SIGNUP</h2>
                            </button>
                            <button class="btn btn-primary" style="width: 200px; margin-left: 20px; margin-right: 20px;">
                                <h2 class="font-sub" style="color: #0d0d0d;">LOGIN</h2>
                            </button>
                        </div>
                    </div>
    			</form>
            </div>
    	</div>
    </div>
@stop