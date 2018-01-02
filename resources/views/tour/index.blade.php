@extends('layouts.index-layout', ['currentView' => 'index-view'])
@section('content') 
    <div id="scene" style="position: relative;">
        
        <div data-depth="1.00" class="row tour-cover-image text-center" style="background-image:url('/images/river/orkhon.jpg')">
        </div>

        <div class="tour-cover-text container">
            <h1 class="white tour-title">{{$tour->name}}</h1>
            <div class="departure-header">
                <h3 class="white" style="margin-top: 14px;">JULY 4-12 2018</h3>
            </div>

            <div class="info-header row">
                <div class="col-md-3 tour-plan">
                    <h4 class="font-sub" style="color: #FECA08">DEPARTURE DATE</h4>
                    <h5 class="font-sub">JULY 4-12 2018</h5>
                </div>
                <div class="col-md-3 tour-plan">
                    <h4 class="font-sub" style="color: #FECA08">DURATION</h4>
                    <h5 class="font-sub">12 DAYS</h5>
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
            <trip-gallery>
            </trip-gallery>
        </div>

        <div class="overview-container container">
            <h3>OVERVIEW</h3>

            {!!$tour->info[0]->content!!}
        </div>

        <custom-map>
        </custom-map>


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