<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\monhocModel;

class monhocApicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return monhocModel::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return 'ok';
        //return $request->all();
            $data = new monhocModel;
            $data->ten = $request->ten;
            $data->mamon = $request->mamon;
            $data->tinchi = $request->tinchi;
            $data->nguoitao = $request->nguoitao;
            $data->save();
            return 'thêm thành công data';
        //return monhocModel::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $data = monhocModel::where('id',$id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // put postman;
    public function update(Request $request, $id)
    {
        $data = monhocModel::find($id);
        $data->ten = $request->ten;
        $data->mamon = $request->mamon;
        $data->tinchi = $request->tinchi;
        $data->nguoitao = $request->nguoitao;
        $data->save();
        return 'update thanh cong';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ //delete postman
    public function destroy($id)
    {
        $data= monhocModel::find($id);
        $data->delete();
        return 'xóa thành công ngon';
    }
}
