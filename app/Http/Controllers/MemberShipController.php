<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\MemberShipDone;

class MemberShipController extends Controller
{
    //
    public function signUp(Request $request) {
        $member = new \stdClass;

        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->email = $request->email;

        $member->country = $request->country;
        $member->state = $request->state;
        $member->city = $request->city;
        //dd($member);
        //return view('emails.booking.done');
        // $booking = "123";
    // 	Mail::to('info@mongolianblackfish.com')->send(new BookingDone($booking));
        //Mail::to('gan.tuvshinbat@gmail.com')->send(new MemberShipDone($member));
     	Mail::to('info@mongolianblackfish.com')->send(new MemberShipDone($member));

    	return view('member-ship-done');
    }
}
