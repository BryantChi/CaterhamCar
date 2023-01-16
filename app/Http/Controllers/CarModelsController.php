<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Repositories\PageSettingInfo;
use App\Models\CarModelsInfo;

class CarModelsController extends Controller
{
    protected $title = '車款介紹';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $count = count(CarModelsInfo::all());
        if ($count > 10) {
            $modelsInfo = CarModelsInfo::inRandomOrder()->take(10)->get();
        } else {
            $modelsInfo = CarModelsInfo::all();
        }
        return view('car_models', ['title' => $this->title, 'modelsInfo' => $modelsInfo, 'pageInfo' => PageSettingInfo::getBanners('/models')]);
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
        $modelsInfo = CarModelsInfo::find($id);
        return view('car_models_details', ['modelsInfo' => $modelsInfo, 'title' => $this->title, 'pageInfo' => PageSettingInfo::getBanners('/models')]);
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
}
