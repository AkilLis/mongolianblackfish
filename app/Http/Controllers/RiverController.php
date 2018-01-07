<?php

namespace App\Http\Controllers;

use App\Contentable;
use App\Http\Controllers\PhotoController;
use App\Tour;
use App\River;
use Illuminate\Database\QueryBuilder;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Response;

class RiverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        return view('admin.river.index');
    }

    public function relatedTours(River $river) 
    {
        return Response::json([
            'code' => 0,
            'tours' => $river->tours()->with('info')->get(),
        ]); 
    }

    public function currentRiver(Tour $tour)
    {
        $tour->visit_count = $tour->visit_count + 1;
        $tour->save();
        $tour->info;
        return view('tour.index')->with(compact('tour'));
    }

    public function getRivers(Request $request) 
    {
        $query = River::all();
        
        return Response::json([
            'code' => 0,
            'rivers' => $query,
        ]);
    }

    public function all(Request $request)
    {
        $query = River::withCount('tours')->get();
        
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $river = new River;
        $river->name = $request->name;
        $cover = $request->cover;

        $river->url = PhotoController::savePhoto($cover, 'river');
        $river->save();

        return Response::json([
            'code' => 0,
            'river' => $river,
            'message' => 'Succesfully saved.',
        ]);
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
    public function edit(River $river)
    {
        //$tour->country;

        return Response::json([
            'code' => 0,
            'result' => $river
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
        $river = River::find($id);
        $river->name = $request->name;
        $cover = $request->cover;

        if($cover) {
            $river->url = PhotoController::savePhoto($cover, 'river');
        }

        //dd("test = ".$request->departure_date);
        $river->save();

        return Response::json([
            'code' => 0,
            'river' => $river,
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
        DB::table('tours')->where('river_id', $id)->delete();
        River::destroy($id);

        return Response::json([
            'code' => 0,
            'message' => 'Succesfully deleted.'
        ]);
    }
}