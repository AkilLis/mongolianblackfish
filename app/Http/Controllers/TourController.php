<?php

namespace App\Http\Controllers;

use App\Contentable;
use App\Http\Controllers\PhotoController;
use App\Tour;
use Illuminate\Database\QueryBuilder;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        return view('tour')->with(compact('tour'));
    }

    public function all(Request $request)
    {
        if(isset($request->type)) {
            if($request->type < 5)
                $query = Tour::where('type', $request->type)->latest();
            else {
                $query = Tour::where('is_pinned', 'Y')->orderBy('updated_at', 'ASC');
            }
        } 
        else $query = Tour::query();


        if(isset($request->search)) {
            $searchValue = trim($request->search);
            $query = $query->where('title', 'like', '%'. $request->search . '%');
        }

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
        $tour->title = $request->title;
        $tour->type = $request->type;
        $tour->country_id = $request->country;
        $tour->visit_count = 0;
        $cover = $request->cover;

        $tour->cover_url = PhotoController::savePhoto($cover, 'tour');

        $tour->save();

        $this->createContent($tour, $request->tour_info, $request->tour_description);

        return Response::json([
            'code' => 0,
            'result' => $tour,
            'message' => 'Амжилттай хадгаллаа.',
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
        $tour->country;

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
        //
        $tour = Tour::find($id);
        $tour->title = $request->title;
        $tour->type = $request->type;
        $tour->country_id = $request->country;

        $cover = $request->cover;

        if($cover) {
            $tour->cover_url = PhotoController::savePhoto($cover, 'tour');
        }

        $tour->save();

        DB::table('contentable')->where('contentable_id', $tour->id)->where('contentable_type', 'App\\Tour')->delete();

        $this->createContent($tour, $request->tour_info, $request->tour_description);

        return Response::json([
            'code' => 0,
            'result' => $tour,
            'message' => 'Амжилттай засварлалаа.',
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
            'message' => 'Амжилттай устгалаа.'
        ]);
    }
}