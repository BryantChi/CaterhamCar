<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Repositories\PageSettingInfo as PageSettingRepository;
use App\Models\HomePageInfo;
use Illuminate\Support\Arr;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $homePageInfo = HomePageInfo::first();
        $slide = json_decode($homePageInfo->slide_setting, true) ?? [];
        $slide_mob = json_decode($homePageInfo->slide_setting_mob, true) ?? [];

        // 依照 sort 欄位排序
        if (is_array($slide)) {
            usort($slide, function($a, $b) {
                return ($a['sort'] ?? 999) <=> ($b['sort'] ?? 999);
            });
        }

        if (is_array($slide_mob)) {
            usort($slide_mob, function($a, $b) {
                return ($a['sort'] ?? 999) <=> ($b['sort'] ?? 999);
            });
        }

        // 轉換回物件格式供 blade 使用
        $slide = json_decode(json_encode($slide));
        $slide_mob = json_decode(json_encode($slide_mob));

        return view('index', ['pageInfo' => $this->getBanner(), 'slide' => $slide, 'slide_mob' => $slide_mob]);
        // return view('index');
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
        //
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
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getBanner() {
        return PageSettingRepository::getHomeBanner();
    }
}
