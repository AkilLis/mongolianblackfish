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
    				Since 2008, some family friends gathered and collaborates, making round trip through Mongolian territory and fishing. Since 2015, the friends are working for tourism industry and especially working on developing fish tour. Our company not only running fish tour, but we are contributing and starting in campaign since 2017, which preserving and breeding this endangered –fish kind. In the scope of this campaign, we working on the exploration, which shows Taimen fish’s distribution of Mongolian territory, water and regional aspects. 
    			</h4>
	    		</br>
	    		</br>
	    		</br>
	    		<member-list>
	    		</member-list>
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