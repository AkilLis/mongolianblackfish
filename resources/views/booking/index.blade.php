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
            <form method="POST" action="/booking/request">
                {{ csrf_field() }}
                </br>
                <h1 class="white text-center">Booking Tour</h1>
                </br>

                {{-- <h3 class="white font-sub">ANGLERS</h3>

                <h4 class="white" style="line-height: 1.5em;">
                  A tour group consists of four people and we can arrange up to six people per request.
                </h4>

                <h3 class="white font-sub">TAILOR MADE</h3>

                <h4 class="white" style="line-height: 1.5em;">
                  You can choose your trip from the river basin on our web page and customize it using the tailor made section.
                </h4>

                <h3 class="white font-sub">DEPOSIT</h3>

                <h4 class="white" style="line-height: 1.5em;">
                  You need to book your trip placing 40 percent deposit. The deposit is refundable 60 days ahead the trip. Please keep in mind that we are not able to refund the deposit if you cancel the trip within 60 days. Upon your reservation, our manager will contact you to get and give the detailed information.
                </h4>

                <h3 class="white font-sub">TRAVEL COST INCLUDES FOLLOWING SERVICES</h3>

                <h4 class="white" style="line-height: 1.5em;">
                   2 days stay at five star hotel in UB, transport to and from the airport, local round flight, river basin lodge, fishing permission, guide, boat and horseback ride, meals and beverage, accidental insurance, and alcoholic beverages per your request.
                </h4>

                <h3 class="white font-sub">FISHING PERMITS</h3>

                <h4 class="white" style="line-height: 1.5em;">
                   Our organization holds a special permission of fishing as per the local law and cooperate with local Natural Conservation Department and Department of Specially Protected zone.
                </h4> --}}

                <input name="tour_id" type="hidden" value="{{$tour->id}}">
                <div class="col-sm-12 row">
                    <div class="col-md-6 col-sm-12 padding-less">
                          <div class="form-group">
                            <label for="test" style="color: #000">Test name</label>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" class="white">First name</label>
                            <input type="Text" name="first_name" class="form-control" id="first" placeholder="First name" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" class="white">Last name</label>
                            <input type="Text" name="last_name" class="form-control" id="last_name" placeholder="Last name" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" class="white">
                              Group size
                            </label>
                            <input type="number" name="group_size" class="form-control" id="group_size" placeholder="Group size" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1" class="white">
                              Additional Information
                            </label>
                            <textarea name="additional_information" class="form-control" rows="4">
                            </textarea>
                          </div>

                          <button type="submit" class="btn btn-primary" style="padding-left: 40px; padding-right: 40px;">
                              <h2 class="font-sub" style="color: #0d0d0d;">SEND REQUEST</h2>
                          </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop