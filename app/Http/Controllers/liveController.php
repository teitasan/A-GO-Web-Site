<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Liveinfo;

class liveController extends Controller
{
    public function craete(Request $request) {
        return view('/live');
    }

    // public function create(Request $request) {
    //     $param = [
    //         'liveTitle' => $request->liveTitle, // ライブタイトル
    //         'livePlace' => $request->livePlace,// ライブ会場
    //         'liveDate' => $request->liveDate, // 日付
    //         'openTime' => $request->openTime,// 開場時間
    //         'startTime' => $request->startTime, // 開演時間
    //         'ticketPrice' => $request->ticketPrice, // チケット料金
    //         'drinkPrice' => $request->drinkPrice, // ドリンク代
    //         'performer' => $request->performer // 出演者、対バン
    //     ];

    //     DB::insert('insert into Liveinfo
    //         (liveTitle, livePlace, liveDate, openTime, startTime, ticketPrice, drinkPrice, performer) 
    //         values (:liveTitle, :livePlace, :liveDate, :openTime, :startTime, :ticketPrice, :drinkPrice, :performer)', $param);
    //     return redirect('/live');
    // }

    public function store(Request $request) {
        $post = New Liveinfo;
            $post->liveTitle = $request->liveTitle; // ライブタイトル
            $post->livePlace = $request->livePlace;// ライブ会場
            $post->liveDate = $request->liveDate; // 日付
            $post->openTime = $request->openTime;// 開場時間
            $post->startTime = $request->startTime; // 開演時間
            $post->ticketPrice = $request->ticketPrice; // チケット料金
            $post->drinkPrice = $request->drinkPrice; // ドリンク代
            $post->performer = $request->performer; // 出演者、対バン
            $post->save();
            return redirect()->route('live');
        }

    public function index(Request $request)
    {
        $items = Liveinfo::all();
        return view ('/live', ['items' => $items]);
    }
}

