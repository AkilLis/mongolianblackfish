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
            <h1>Tailor-made trip request recieved</h1>

            <form>
                <div class="col-md-6 col-sm-12 padding-less">
                    <fieldset>
                        <legend>Personal Information</legend>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="white">Personal Name</label>
                            <h2>
                                {{ $custom->personal_name }}
                            </h2>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Email address</label>
                            <h2>
                                {{ $custom->email }}
                            </h2>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Gender</label>
                            <h2>
                                {{ $custom->gender }}
                            </h2>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Country</label>
                            <h2>
                                {{ $custom->country }}
                            </h2>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1" class="white">City</label>
                            <h2>
                                {{ $custom->city }}
                            </h2>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Address</label>
                            <h2>
                                {{ $custom->address }}
                            </h2>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Phone</label>
                            <h2>
                                {{ $custom->phone }}
                            </h2>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Alergy</label>
                            <h2>
                                {{ $custom->alergy }} / {{ $custom->alergy_description }} /
                            </h2>
                        </div>
                    </fieldset>
                    </br>
                    </br>
                    <fieldset>
                        <legend>Trip Information</legend>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Trip name</label>
                            <h2>
                                {{ $custom->trip }}
                            </h2>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Traveller size</label>
                            <h2>
                                {{ $custom->traveller_count }}
                            </h2>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Age level</label>
                            <h2>
                                {{ $custom->age_group }}
                            </h2>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Start-End Date</label>
                            <h2>
                                {{ $custom->start_date }} - {{ $custom->end_date}}
                            </h2>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Hotel in Ulaanbaatar</label>
                            <h2>
                                {{ $custom->hotel }}
                            </h2>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="white">Ride</label>
                            <h2>
                                {{ $custom->ride }}
                            </h2>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </body>
</html>
