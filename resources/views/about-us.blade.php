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
            </br>
            <h1 class="white text-center" style="margin-bottom: 80px; margin-top: 120px;">About Mongolia</h1>
            <object data="/pdf/About Mongolia.pdf" type="application/pdf" width="100%" height="700">
                <iframe src="/pdf/About Mongolia.pdf" width="100%" height="100%" style="border: none;">
                This browser does not support PDFs. Please download the PDF to view it: <a href="/pdf/sample-3pp.pdf">Download PDF</a>
                </iframe>
            </object>
            <h1 class="white text-center" style="margin-bottom: 80px; margin-top: 120px;">About Khuvsgul</h1>
            <object data="/pdf/Intro of Khuvsgul.pdf" type="application/pdf" width="100%" height="700">
                <iframe src="/pdf/Intro of Khuvsgul.pdf" width="100%" height="100%" style="border: none;">
                This browser does not support PDFs. Please download the PDF to view it: <a href="/pdf/sample-3pp.pdf">Download PDF</a>
                </iframe>
            </object>
            <h1 class="white text-center" style="margin-bottom: 80px; margin-top: 120px;">Visa Information</h1>
            <object data="/pdf/Visa information.pdf" type="application/pdf" width="100%" height="700">
                <iframe src="/pdf/Visa information.pdf" width="100%" height="100%" style="border: none;">
                This browser does not support PDFs. Please download the PDF to view it: <a href="/pdf/sample-3pp.pdf">Download PDF</a>
                </iframe>
            </object>
    	</div>
    </div>
@stop