<?php

namespace App\Http\Controllers;

use App\Contentable;
use App\Http\Controllers\PhotoController;
use App\Tour;
use Illuminate\Database\QueryBuilder;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Response;

class TourController extends Controller
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

    public function currentNews(Tour $tour)
    {
        $tour->visit_count = $tour->visit_count + 1;
        $tour->save();
        $tour->info;
        return view('tour.index')->with(compact('tour'));
    }

    public function all(Request $request)
    {
        $query = Tour::query();
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