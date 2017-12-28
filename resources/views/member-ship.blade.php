@extends('layouts.index-layout', ['currentView' => 'index-view'])
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
    			<h1>Why should you join us?</h1>
				</br>
    			<div class="row">
    				<div class="col-md-4">
    					<img 
    						src="/images/taimen_donate.png"
                            height="300"
                            width="300"
    					/>
    				</div>
    				<div class="col-md-8">
    					<h1 style="color: #FECA08">1. Taimen fish donation</h1>
    					</br>
    					<h4 class="white" style="line-height: 1.5em;">Our partners promote sustainable “catch and release” fishing practices and natural reproduction. We facilitate the creation of sustainable models for recreational fishing and implement campaigns to increase awareness and support programs that improve general scientific knowledge of taimen and associated habitats. We work with local and national government agencies to help generate regulatory, management and enforcement improvements. Our efforts are designed to conserve endemic species and natural ecological functions. Ultimately, we want to see Mongolia’s rivers remain wild and free of hatcheries, permanent streamside development and substantial flow alterations. Therefore, we work to protect rivers at a scale that is ecologically meaningful and will result in the conservation of Mongolia’s unique natural and cultural heritage.

We thank those who have invested in the conservation of this wonderful species, and have helped make this program so successful. Your donations are applied quickly and directly to projects that keep taimen where they belong--in the beautiful rivers of Mongolia. Please take a moment to read about taimen conservation and our team. We look forward to working with you and keeping you informed, so do check back with us for regular updates.
</br></br>
We are excited to share our enthusiasm for protecting the world’s largest trout species!
</br></br>
Sincerely,

</br></br>Charlie Conn, Executive Director</h4>
    				</div>
    			</div>
    			</br>
    			</br>
                </br>
                </br>
    			<div class="row">
    				<div class="col-md-7">
    					<h1 style="color: #FECA08">2. 10% off tour</h1>
    					</br>
    					<h4 class="white" style="line-height: 1.5em;">Taimen are an extremely sensitive species and not easy to protect. Taimen once inhabited regions from Hokkaido to the Danube. Wild populations are now reduced to a few isolated pockets in remote places like Mongolia. Without aggressive conservation action supported by the international angling community, these remaining pockets of wild taimen will be lost.</h4>
    				</div>
    				<div class="col-md-5 text-center">
    					<img 
                            height="300"
                            width="300"
    						src="/images/mbf_logo.png"
    					/>
    				</div>
    			</div>
                </br></br></br></br>
                <div class="row">
                    <div class="col-md-5 text-center">
                        <div style="width: 300px; height: 300px;">
                            <img
                                style="width: 100%; height: 100%; object-fit: contain;" 
                                src="/images/taimen_coupon.jpg"
                            />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h1 style="color: #FECA08">3. Make sure one of your friend 10% off tour too</h1>
                        </br>
                        <h4 class="white" style="line-height: 1.5em;">We gave you coupon for 10% off any tour same season. Taimen are an extremely sensitive species and not easy to protect. Taimen once inhabited regions from Hokkaido to the Danube. Wild populations are now reduced to a few isolated pockets in remote places like Mongolia. Without aggressive conservation action supported by the international angling community, these remaining pockets of wild taimen will be lost.</h4>
                    </div>
                </div>
                </br></br>
			</form>

            <div class="container row margin-auto">
                    <div class="text-center">
                        <h2>Do you want to join now?</h2>
                        <button class="btn btn-primary outline" style="width: 200px">
                            SUBSCRIBE
                        </button>
                    </div>
                    <br />
                    <div class="text-center">
                        <h3 class="white">Allready a member?</h3>
                        <button class="btn btn-primary outline" style="width: 200px">
                            LOG IN
                        </button>
                    </div>
            </div>
    	</div>
    </div>
@stop