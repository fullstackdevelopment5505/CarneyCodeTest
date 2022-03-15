<?php

namespace App\Http\Controllers;

use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        // original data
        $members = Member::all();

        // part1 : Augment the output of the /members endpoint
        $subs_members = Member::with('subscription')->get();

        // part3 : sorted
        $sorted_memebers = Member::with('subscription')
            ->get()
            ->sortByDesc(function($member) {
                return $member->subscription->price;
            });

        $sub_avg = Member::with('subscription')
            ->get()
            ->avg(function($member) {
                return $member->subscription->price;
            });

        return view('memeber')->with(['members' => $members, 'subs_members' => $subs_members, 'sorted_memebers' => $sorted_memebers, 'sub_avg' => $sub_avg]);
        // return response()->json(['error' => false, 'data' => $members2]);
    }

    //
}
