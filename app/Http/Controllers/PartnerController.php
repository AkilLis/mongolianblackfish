<?php

namespace App\Http\Controllers;

use App\Contentable;
use App\Http\Controllers\PhotoController;
use App\Tour;
use App\Partner;
use App\Member;
use Illuminate\Database\QueryBuilder;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Response;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        return view('admin.partner.index');
    }

    public function all(Request $request)
    {
        $query = Partner::get();
        
        return Response::json([
            'code' => 0,
            'result' => $query,
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
        $partner = new Partner;
        $partner->name = $request->name;
        $partner->link = $request->link;
        $cover = $request->cover;
        $partner->url = PhotoController::savePhoto($cover, 'partner');

        $partner->save();

        return Response::json([
            'code' => 0,
            'partner' => $partner,
            'message' => 'Succesfully saved.',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //$tour->info;
        //$tour->country;

        return Response::json([
            'code' => 0,
            'result' => $partner
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
        $partner = Partner::find($id);
        $partner->name = $request->name;
        $partner->link = $request->link;

        if($request->cover) {
            $partner->url = PhotoController::savePhoto($request->cover, 'partner');
        }
        //$partner->url = PhotoController::savePhoto($cover, 'partner');

        $partner->save();

        return Response::json([
            'code' => 0,
            'partner' => $partner,
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
        Partner::destroy($id);

        return Response::json([
            'code' => 0,
            'message' => 'Succesfully deleted.'
        ]);
    }
}