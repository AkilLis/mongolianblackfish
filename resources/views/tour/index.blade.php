@extends('layouts.index-layout', ['currentView' => 'tour-page', 'data' => 'tour'])
@section('content') 
    <div id="scene" style="position: relative;">
        
        <div data-depth="1.00" class="row tour-cover-image text-center" 
             style="background-image:url({{$tour->url}})">
        </div>

        <div class="tour-cover-text container">
            <h1 class="white tour-title">{{$tour->name}}</h1>
            <div class="departure-header">
                <h3 class="white" style="margin-top: 14px;">{{date('M, d Y', strtotime($tour->departure_date))}}</h3>
            </div>

            <div class="info-header row">
                <div class="col-md-3 tour-plan">
                    <h4 class="font-sub" style="color: #FECA08">DEPARTURE DATE</h4>
                    <h5 class="font-sub">{{date('M, d Y', strtotime($tour->departure_date))}}</h5>
                </div>
                <div class="col-md-3 tour-plan">
                    <h4 class="font-sub" style="color: #FECA08">DURATION</h4>
                    <h5 class="font-sub">@{{dateBetween("123", "123")}}</h5>
                </div>
                <div class="col-md-3 tour-plan">
                    <h4 class="font-sub" style="color: #FECA08">GROUP SIZE</h4>
                    <h5 class="font-sub">{{$tour->group_size}} MEMBERS</h5>
                </div>
                <div class="col-md-3 tour-plan">
                    <h4 class="font-sub" style="color: #FECA08">TYPE</h4>
                    <h5 class="font-sub">{{$tour->type}}</h5>
                </div>
            </div>
        </div>

        <div class="row portfolio-container">
            <trip-gallery
                :photos="{{ json_encode($tour->photos) }}"
            >
            </trip-gallery>
        </div>

        <div class="overview-container container">
            <h3>OVERVIEW</h3>

            {!!$tour->info[0]->content!!}
        </div>

        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <h1 style="color: #fff; margin-bottom: 40px;">
                Travel map to {{ $tour->river->name }}
            </h1>
            <div id="map">
                <iframe src="{{$tour->map_url}}" width="1170" height="600"></iframe>

                <!-- <iframe src="https://www.google.com/maps/d/embed?mid=1D2N6tVsjt88-oSxNQ9IZrT-1m9Y" width="1170" height="600"></iframe> -->
            </div>
        </div>

        <nav class="action-button-container"> 
            <div class="fab-question">
                <h5 class="font-sub white">Are you ready for booking?</h5>
            </div>
            <div class="buttons">
                <a tooltip="Book Now" href="#">
                  <h4 class="white font-sub">Book Now</h4>
                </a>
            </div>
        </nav>

    </div>
@stop