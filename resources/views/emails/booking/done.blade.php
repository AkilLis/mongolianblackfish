<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <style>
          label { color: #0d0d0d; }
          h2 { color: #0d0d0d; line-height: 1.5em; }
          p { color: blue; }
        </style>
    </head>
    <body style="font-family: Verdana">
        <div class="flex-center position-ref full-height" id="app">
            <h1>Booking request recieved</h1>

            <form>
                <div class="col-md-6 col-sm-12 padding-less">
                    <fieldset>
                        <legend>Personal Information</legend>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="white">Personal Name</label>
                            <h2>
                                {{ $booking->personal_name }}
                            </h2>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Email address</label>
                            <h2>
                                {{ $booking->email }}
                            </h2>
                        </div>
                    </fieldset>
                    </br>
                    </br>
                    <fieldset>
                        <legend>Trip Information</legend>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Trip name / Departure Date</label>
                            <h2>
                            	{{ $booking->tour_name }} / {{ $booking->tour_departure_date }}
                            </h2>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Group size</label>
                            <h2>
                                {{ $booking->group_size }}
                            </h2>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </body>
</html>
