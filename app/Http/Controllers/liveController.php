<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class liveController extends Controller
{
    public function add(Request $request) {
        return view('live');
    }

    public function create(Request $request) {
        $param = [
            'liveTitle' => $request->liveTitle, // ライブタイトル
            'livePlace' => $request->livePlace,// ライブ会場
            'liveDate' => $request->liveDate, // 日付
            'openTime' => $request->openTime,// 開場時間
            'startTime' => $request->startTime, // 開演時間
            'ticketPrice' => $request->ticketPrice, // チケット料金
            'drinkPrice' => $request->drinkPrice, // ドリンク代
            'performer' => $request->performer // 出演者、対バン
        ];

        DB::insert('insert into Liveinfo
            (liveTitle, livePlace, liveDate, openTime, startTime, ticketPrice, drinkPrice, performer) 
            values (:liveTitle, :livePlace, :liveDate, :openTime, :startTime, :ticketPrice, :drinkPrice, :performer)', $param);
        return redirect('/');
    }
}

