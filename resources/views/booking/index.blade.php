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
            <form>
                </br>
                <h1 class="white">Booking Tour</h1>
                </br>
                <div class="col-md-6 col-sm-12 padding-less">
                      <div class="form-group">
                        <label for="exampleInputPassword1" class="white">First name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1" class="white">Last name</label>
                        <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Last name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="white">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1" class="white">
                          Price per member
                        </label>

                        <h3 class="white">
                            {{$tour->price}}$
                        </h3>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="white">Departure Date</label>
                        <h3 class="white">
                            {{date('M, d Y', strtotime($tour->departure_date))}}
                        </h3>
                        
                      </div>
                      <button type="submit" class="btn btn-primary" style="width: 120px; margin-top: 10px;">Send Request</button>
                </div>
            </form>
        </div>
    </div>
@stop