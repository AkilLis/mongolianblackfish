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
                <h1 class="white text-center">Your request was sent successfully.</h1>
                </br>
            </form>
        </div>
    </div>
@stop