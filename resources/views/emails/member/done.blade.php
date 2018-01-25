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
            <h1>Member ship request recieved</h1>

            <form>
                <div class="col-md-6 col-sm-12 padding-less">
                    <div class="form-group">
                        <label class="white">First Name</label>
                        <h2>
                            {{ $member->first_name }}
                        </h2>
                    </div>
                    <div class="form-group">
                        <label class="white">Last Name</label>
                        <h2>
                            {{ $member->last_name }}
                        </h2>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="white">Email address</label>
                        <h2>
                            {{ $member->email }}
                        </h2>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="white">Country</label>
                        <h2>
                            {{ $member->country }}
                        </h2>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="white">State</label>
                        <h2>
                            {{ $member->state }}
                        </h2>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="white">City</label>
                        <h2>
                            {{ $member->city }}
                        </h2>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
