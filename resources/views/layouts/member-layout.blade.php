<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       
        @include('includes.resource')


        
    </head>
    <body>
        <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDX7nlSayoGLZv1ovXsbAxL37XGsK9v8Q">
    </script>

        @include('includes.header')
        
        <div class="flex-center position-ref full-height" id="app">
            
            <component is="{{$currentView}}" 
                       inline-template
            >
                @yield('content')
            </component>
            
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
                                    <div class="col-md-3 text-center">
                                        <img src="/images/logo_white.png" width="90" height="90" style="margin-top: 10px;" />
                                    </div>
                                    <div class="col-md-9" style="padding-left: 40px;">
                                        <h3 class="font-sub white">MONGOLIAN BLACK FISH</h3>
                                    </div>
                                </div>
                                <span class="font-sub white">House-1, gerelt town, 11th micro district , Zaisan street, Khan-Uul district, 
                                </span>
                                <span class="font-sub white">Ulaanbaatar city, Mongolia</span>
                                <br />
                                <br />
                                 <span class="font-sub white">Zip Code 17023</span>
                                <br />
                                <br />
                                <span class="font-sub white">+97699100982, </span>
                                <span class="font-sub white">+97691998427</span>
                            </div>
                            <div class="col-md-8 row" style="margin-top: 20px;">
                                <div class="col-md-4" style="border-left: 1px solid #fff; height: 200px;">
                                    <ul style="list-style-type:none;">
                                      <li><a href="/">
                                        <h4 class="font-sub white">HOME</h4></a></li>
                                      <li style="margin: 20px 0px;"><a href="/"><h4 class="font-sub white">TOURS</h4></a></li>
                                      <li style="margin: 20px 0px;"><a href="/"><h4 class="font-sub white">RIVERS</h4></a></li>
                                      <li style="margin: 20px 0px;"><a href="/"><h4 class="font-sub white">BLOG</h4></a></li>
                                      <li><a href="/"><h4 class="font-sub white">CONTACT</h4></a></li>
                                    </ul> 
                                </div>
                                <div class="col-md-4 text-center" style="border-left: 1px solid #fff; padding:0px 55px; height: 200px;">
                                    <h4 class="font-sub white">FOLLOW US</h4>

                                    <div>
                                        <a href="https://www.facebook.com/mongolian.blackfish.5">
                                            <img 
                                                src="/images/facebook.png"
                                                height="50"
                                                width="50"
                                            />
                                        </a>
                                        <img 
                                            style="margin-left: -5px"
                                            src="/images/youtube.png"
                                            height="50"
                                            width="50"
                                        />
                                    </div>
                                    <div>
                                        <a href="https://twitter.com/MongolianFish">
                                            <img 
                                                src="/images/twitter.png"
                                                height="50"
                                                width="50"
                                            />
                                        </a>
                                        <a href="https://www.instagram.com/mongolian_black_fish/">
                                            <img 
                                                src="/images/instagram.png"
                                                style="margin-left: -5px"
                                                height="50"
                                                width="50"
                                            />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4" style="border-left: 1px solid #fff; padding:0px 40px; height: 200px;">
                                    <h6 class="white" style="line-height: 20px;">Get updates about new tours, travel tips, photo guide and ask question about the tours!</h6>

                                    <form>
                                        <div class="form-group">
                                          <label class="white" style="font-weight: normal; font-size: 12px;" for="email">Email:</label>
                                          <input type="text" placeholder="Type your email ..." class="form-control hollow-input" id="email">
                                        </div>
                                        <button class="btn-outline">
                                            SEND
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container row" style="margin-left: auto; margin-right: auto; padding-left: 0px;">
                        <p class="col-md-10" style="color: #828282;">All Right Reserved Mongolian Black Fish Tour 2017.</p>

                        <div class="col-md-2 text-left">
                            <img src="/images/simplood.png" height="14" />
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <a href="javascript:" id="return-to-top">
            <img src="/images/logo.png" width="30" height="30" />
        </a>

        <script type="text/javascript" src="{!! mix('js/app.js') !!}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="{!! asset('js/photoswipe.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/photoswipe-ui-default.min.js') !!}"></script>
        <script type="text/javascript">
            $(function () {
                $('#date_of_birth').datetimepicker({
                	format: "YYYY/MM/DD",
                	defaultDate: new Date()
                });
            });
        </script>
        
    </body>
</html>
