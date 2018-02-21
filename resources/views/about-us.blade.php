@extends('layouts.index-layout', ['currentView' => 'index-page'])
@section('content') 
    <div id="scene" style="position: relative;">
        <div data-depth="1.00" class="row cover-image-nav" style="background-image:url('/images/cover.jpg')" >
        </div>
        <div class="container" style="padding-bottom: 80px;">
    		<form>
    			</br>
    			<h1 class="white text-center">Why choose our company?</h1>
				</br>
    			<h4 class="white" style="line-height: 1.5em;">
    				- Khuvsgul province is the motherland of Taimen fish of the world, which has the most and the biggest Taimen. Our company owned 2 hectares fine located field in the fish motherland.
          </h4>
          <h4 class="white" style="line-height: 1.5em;">
            - We are one of the fewer companies which has the fishing permit for Taimen fish. In Mongolia, it is very difficult to get a fishing permit for Taimen fish.
          </h4>
          <h4 class="white" style="line-height: 1.5em;">
              - Has team of fisherman with long lasting experience.
          </h4>

          <h4 class="white" style="line-height: 1.5em;">
              - Has well-acquainted guides with wide knowledge of geography and region.
          </h4>

          <h4 class="white" style="line-height: 1.5em;">
              - One of the top 10 cook in Mongolia, will serve you with fresh and best quality food.
          </h4>

          <h4 class="white" style="line-height: 1.5em;">
              - Will serve customers by Land Rover, Land Cruiser 4x4 off road SUV cars equipped with high quality gears.
          </h4>

          <h4 class="white" style="line-height: 1.5em;">
               - Will provide you great opportunity to go fishing by motored and non-motored-boat and by horses to your wishful destination.
          </h4>

          <h4 class="white" style="line-height: 1.5em;">
            - We have a plan to receive a few amount of tourists within a year. Therefore, we will provide great service with great quality.
          </h4>
            
          <h4 class="white" style="line-height: 1.5em;">
            - A fishing trip has a team of professional producer and photo shooting. You can let the video team to take a recording of your moments of fishing and traveling through Mongolia, and we will make a short memorable film only for you.
          </h4>
          <h4 class="white" style="line-height: 1.5em;">
              - Our company is doing best fishing service for providing the most convenient sphere at the finest places.
    			</h4>
	    		</br>
	    		</br>
          <h4 class="text-center" style="color: #FECA08; line-height: 1.5em;">
              Hope you will choose our service. See you soon.
          </h4>
          <h4 class="text-center" style="color: #FECA08; line-height: 1.5em;">
          Don’t worry about anything. Just let’s go fishing.
          </h4>

          <h4 class="text-center" style="color: #FECA08; line-height: 1.5em;">
          “The world is a book and those who do not travel read only one page.” St. Augustine
          </h4>
	    		</br>
          </br>
          <h1 class="white text-center">Our team</h1>
          </br>
          </br>
	    		<member-list>
	    		</member-list>

          <h1 class="white text-center">GUIDE SERVICE</h1>
          <h1 class="white text-center">A GREAT GUIDE FOR YOU</h1>
          </br>
          <h4 class="white" style="line-height: 1.5em;">
                Our guide experts work together as a great team, share information on a daily basis, integrate talents, ideas and everyday experience. That’s why we are one of the most successful fishing service provider in Khuvsgul province, Northern Mongolia.
          </h4>

          </br>

          <h4 class="white" style="line-height: 1.5em;">
                We’ve been guiding fly fishermen in the surrounding rivers and streams since 2010.  We know the ropes and we are the only company which holding the permits for Shishged, Tengis, Sharga, Orkhon, Khalkh gol, Balj, Onon river, and all the regional rivers, streams, and fisheries issued by the Ministry of nature and Environment. 
          </h4>
          </br>
			</form>
			</br>
			</br>
            
            <div class="about-link" style="margin-bottom: 30px;">
                <a data-toggle="modal" data-target="#aboutMongolia">
                    <h1 class="white text-center">About Mongolia</h1>
                </a>
            </div>

            <div class="about-link" style="margin-bottom: 30px;">
                <a data-toggle="modal" data-target="#aboutKhuvsgul">
                    <h1 class="white text-center">About Khuvsgul</h1>
                </a>
            </div>

            <div class="about-link">
                <a data-toggle="modal" data-target="#aboutVisa">
                    <h1 class="white text-center">Visa Information</h1>
                </a>
            </div>
            </br>

            <div class="modal fade" id="aboutMongolia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width: 80%; height: 100%; padding: 0;">
                <div class="modal-content" style="background-color: #0d0d0d;">
                  <div class="modal-header" style="border-bottom: 1px solid #FECA08 !important;">
                    <button type="button" class="close" style="color: #FECA08; font-size: 36px !important; opacity: 1 !important;" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                        <object data="/pdf/About Mongolia.pdf" type="application/pdf" width="100%" height="700">
                            <iframe src="/pdf/About Mongolia.pdf" width="100%" height="100%" style="border: none;">
                            This browser does not support PDFs. Please download the PDF to view it: <a href="/pdf/sample-3pp.pdf">Download PDF</a>
                            </iframe>
                        </object>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="aboutKhuvsgul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width: 80%; height: 100%; padding: 0;">
                <div class="modal-content" style="background-color: #0d0d0d;">
                  <div class="modal-header" style="border-bottom: 1px solid #FECA08 !important;">
                    <button type="button" class="close" style="color: #FECA08; font-size: 36px !important; opacity: 1 !important;" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                        <object data="/pdf/Intro of Khuvsgul.pdf" type="application/pdf" width="100%" height="700">
                            <iframe src="/pdf/Intro of Khuvsgul.pdf" width="100%" height="100%" style="border: none;">
                            This browser does not support PDFs. Please download the PDF to view it: <a href="/pdf/sample-3pp.pdf">Download PDF</a>
                            </iframe>
                        </object>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="modal fade" id="aboutVisa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width: 80%; height: 100%; padding: 0;">
                <div class="modal-content" style="background-color: #0d0d0d;">
                  <div class="modal-header" style="border-bottom: 1px solid #FECA08 !important;">
                    <button type="button" class="close" style="color: #FECA08; font-size: 36px !important; opacity: 1 !important;" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                        <object data="/pdf/Visa information.pdf" type="application/pdf" width="100%" height="700">
                            <iframe src="/pdf/Visa information.pdf" width="100%" height="100%" style="border: none;">
                            This browser does not support PDFs. Please download the PDF to view it: <a href="/pdf/sample-3pp.pdf">Download PDF</a>
                            </iframe>
                        </object>
                  </div>
                </div>
              </div>
            </div>
    	</div>
    </div>
@stop