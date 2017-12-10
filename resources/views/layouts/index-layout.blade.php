<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       
        @include('includes.resource')


        
    </head>
    <body style="background-image: url(../images/pattern-bg.png);">
        <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDX7nlSayoGLZv1ovXsbAxL37XGsK9v8Q">
    </script>

        @include('includes.header')
        
        <div class="flex-center position-ref full-height" id="app">
            
            @yield('content')

            
            <footer>
                <div class="ready-for-tour">
                    <div class="for-tour-text container">
                        <h1 class="text-center white" style="font-size: 48px;">Ready for An Unforgetable</h1>
                        <h1 class="text-center white" style="font-size: 48px;">Tour?</h1>
                    </div>
                </div>
                <div class="contact-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row" style="margin-bottom: 30px;">
                                    <div class="col-md-3">
                                        <img src="/images/logo.png" width="90" height="90" style="margin-top: 10px;" />
                                    </div>
                                    <div class="col-md-9" style="padding-left: 40px;">
                                        <h3 class="font-sub white">MONGOLIAN BLACK FISH</h3>
                                    </div>
                                </div>
                                <span class="font-sub white">PO BOX 2339</span>
                                <span class="font-sub white">24 department Ulaanbaatar, Mongolia</span>
                                <br />
                                <br />
                                <span class="font-sub white">+97699042312</span>
                            </div>
                            <div class="col-md-8 row" style="margin-top: 20px;">
                                <div class="col-md-4" style="border-left: 1px solid #fff">
                                    <ul style="list-style-type:none;">
                                      <li><a href="/"><h4 class="font-sub white">HOME</h4></a></li>
                                      <li><a href="/"><h4 class="font-sub white">TOURS</h4></a></li>
                                      <li><a href="/"><h4 class="font-sub white">RIVERS</h4></a></li>
                                      <li><a href="/"><h4 class="font-sub white">BLOG</h4></a></li>
                                      <li><a href="/"><h4 class="font-sub white">CONTACT</h4></a></li>
                                    </ul> 
                                </div>
                                <div class="col-md-4" style="border-left: 1px solid #fff">
                                    <h4 class="font-sub white">FOLLOW US</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container row" style="margin-left: auto; margin-right: auto; padding-left: 0px;">
                        <p class="col-md-10" style="color: #828282;">All Right Reserved Mongolian Black Fish Tour 2017.</p>

                        <div class="col-md-2 text-right">
                            <img src="/images/simplood.png" height="14" />
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
        
    </body>
</html>
