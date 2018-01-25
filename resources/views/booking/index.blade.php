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
                <h1 class="white">Booking Tour</h1>
                </br>

                <input name="tour_id" type="hidden" value="{{$tour->id}}">
                <div class="col-md-6 col-sm-12 padding-less">
                      <div class="form-group">
                        <label for="test" style="color: #000">Test name</label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1" class="white">First name</label>
                        <input type="Text" name="first_name" class="form-control" id="first" placeholder="First name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1" class="white">Last name</label>
                        <input type="Text" name="last_name" class="form-control" id="last_name" placeholder="Last name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="white">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1" class="white">
                          Group size
                        </label>
                        <input type="number" name="group_size" class="form-control" id="group_size" placeholder="Group size">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1" class="white">
                          Additional Information
                        </label>
                        <textarea name="additional_information" class="form-control" rows="4">
                        </textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-primary" style="width: 120px; margin-top: 10px;">Send Request</button>
                </div>
            </form>
        </div>
    </div>
@stop