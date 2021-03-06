<?php

namespace App\Http\Controllers;

use App\Contentable;
use App\Http\Controllers\PhotoController;
use App\Tour;
use App\Member;
use Illuminate\Database\QueryBuilder;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Response;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        return view('admin.about.index');
    }

    public function members(Request $request) 
    {
        $query = Member::get();
        return Response::json([
            'code' => 0,
            'result' => $query
        ]);
    }

    public function all(Request $request)
    {
        return Response::json([
            'code' => 0,
            'result' => Member::get(),
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
        $member = new Member;
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->major = $request->major;
        $member->role = $request->role;
        $member->facebook_link = $request->facebook_link;
        $member->twitter_link = $request->twitter_link;
        $member->mail = $request->mail;
        $member->url = PhotoController::savePhoto($request->cover, 'member');

        $member->save();

        return Response::json([
            'code' => 0,
            'member' => $member,
            'message' => 'Succesfully saved.',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$tour->info;
        //$tour->country;

        $member = Member::find($id);

        return Response::json([
            'code' => 0,
            'result' => $member
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
        $member = Member::find($id);
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->major = $request->major;
        $member->role = $request->role;
        $member->facebook_link = $request->facebook_link;
        $member->twitter_link = $request->twitter_link;
        $member->mail = $request->mail;

        if($request->cover) {
            $member->cover = PhotoController::savePhoto($request->cover, 'tour');
        }
        //$member->url = PhotoController::savePhoto($cover, 'member');

        $member->save();

        return Response::json([
            'code' => 0,
            'member' => $member,
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
        Member::destroy($id);

        return Response::json([
            'code' => 0,
            'message' => 'Succesfully deleted.'
        ]);
    }
}