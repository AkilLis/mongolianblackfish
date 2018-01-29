<?php

namespace App\Http\Controllers;

use App\Contentable;
use App\Http\Controllers\PhotoController;
use App\Tour;
use App\Mail\BookingDone;
use App\TailorDone;
use Illuminate\Database\QueryBuilder;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        return view('admin.tour.index');
    }

    public function bookTour(Tour $tour) 
    {
        return view('booking.index')->with(compact('tour'));
    }

    public function tailorMadeDone(Request $request) 
    {
        
        $custom = new \stdClass;

        $custom->personal_name = $request->first_name . " " . $request->last_name;
        $custom->email = $request->email;
        $custom->country = $request->country;
        $custom->city = $request->city;
        $custom->address = $request->address;
        $custom->phone = $request->phone;
        $custom->gender = $request->gender;
        $custom->alergy = $request->alergy;
        $custom->alergy_description = $request->alergy_description;
        $custom->trip = $request->trip;
        $custom->traveller_count = $request->traveller_count;
        $custom->age_group = $request->age_group;
        $custom->start_date = $request->start_date;
        $custom->end_date = $request->end_date;
        $custom->hotel = $request->hotel;
        $custom->ride = $request->ride;

        //dd($custom);
        Mail::to('info@mongolianblackfish.com')->send(new TailorDone($custom));

        return view('booking.done');
    }

    public function bookginTourDone(Request $request) 
    {
        $tour = Tour::find($request->tour_id);
        $booking = new \stdClass;

        $booking->tour_name = $tour->name;
        $booking->tour_departure_date = $tour->departure_date;

        $booking->personal_name = $request->first_name . " " . $request->last_name;
        $booking->email = $request->email;
        $booking->group_size = $request->group_size;
        $booking->additional_information = $request->additional_information;
        //dd($booking);
        //return view('emails.booking.done');
        // $booking = "123";
        Mail::to('info@mongolianblackfish.com')->send(new BookingDone($booking));

        return view('booking.done');
    }

    public function currentNews(Tour $tour)
    {
        $tour->visit_count = $tour->visit_count + 1;
        $tour->save();
        $tour->river;
        $tour->info;

        return view('tour.index')->with(compact('tour'));
    }

    public function all(Request $request)
    {
        $query = Tour::query()->with('river');
        $query = $query->paginate(10);
        
        return Response::json([
            'code' => 0,
            'result' => $query,
        ]);
    }

    public function tourPage()
    {
        return view('/tour')->with('menu', 'tour');
    }

    public function information(Request $request)
    {
        $query = Tour::whereNotIn('type', [2, 4]);
        $query = $query->with('info')->latest();
        $query = $query->paginate(10);

        return Response::json([
            'code' => 0,
            'result' => $query
        ]);
    }

    public function news(Request $request)
    {
        if(isset($request->type)) {
            $type = $request->type;

            if($type == 'pinned') {
                $news = Tour::where('is_pinned', 'Y')
                    ->with('info')
                    ->orderBy('updated_at', 'ASC')
                    ->get();
            }

        } else {
            $news = Tour::with('info')->latest()->limit(4)->get();
        }

        return Response::json([
            'code' => 0,
            'result' => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tour = new Tour;
        $tour->name = $request->name;
        $tour->river_id = $request->river_id;
        $tour->type = $request->type;
        $tour->price = $request->price;
        $tour->group_size = $request->group_size;
        $tour->start_date = Carbon::createFromFormat('Y-m-d', $request->start_date);
        $tour->end_date = Carbon::createFromFormat('Y-m-d', $request->end_date);
        $tour->departure_date = Carbon::createFromFormat('Y-m-d', $request->departure_date);
        $tour->map_url = $request->map_url;
        $tour->visit_count = 0;
        $cover = $request->cover;

        $tour->url = PhotoController::savePhoto($cover, 'tour');


        //dd("test = ".$request->departure_date);
        $tour->save();

        $this->createContent($tour, $request->tour_info, $request->description);

        return Response::json([
            'code' => 0,
            'tour' => $tour,
            'message' => 'Succesfully saved.',
        ]);
    }

    public function createContent($tour, $data, $description)
    {
        $content = new Contentable;
        $content->contentable_id = $tour->id;
        $content->description = $description;
        $content->contentable_type = get_class($tour);
        $content->content = stripslashes($data); 

        $content->save();

        return $content;        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $tour->info;
        //$tour->country;

        return Response::json([
            'code' => 0,
            'result' => $tour
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tour = Tour::find($id);
        $tour->river_id = $request->river_id;
        $tour->name = $request->name;
        $tour->type = $request->type;
        $tour->price = $request->price;
        $tour->group_size = $request->group_size;
        $tour->start_date = Carbon::createFromFormat('Y-m-d', $request->start_date);
        $tour->end_date = Carbon::createFromFormat('Y-m-d', $request->end_date);
        $tour->departure_date = Carbon::createFromFormat('Y-m-d', $request->departure_date);
        $tour->map_url = $request->map_url;
        $tour->visit_count = 0;
        $cover = $request->cover;

        if($cover) {
            $tour->url = PhotoController::savePhoto($cover, 'tour');
        }

        //dd("test = ".$request->departure_date);
        $tour->save();

        $this->createContent($tour, $request->tour_info, $request->description);

        return Response::json([
            'code' => 0,
            'tour' => $tour,
            'message' => 'Succesfully edited.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @request  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('contentable')->where('contentable_id', $id)->where('contentable_type', 'App\\Tour')->delete();
        Tour::destroy($id);

        return Response::json([
            'code' => 0,
            'message' => 'Succesfully deleted.'
        ]);
    }
}