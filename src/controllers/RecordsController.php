<?php

namespace Lonban\CaseHistory\Controllers;

use Illuminate\Http\Request;
use Lonban\CaseHistory\Model\CaseHistoryRecord;

class RecordsController extends CommonController
{
    /**
     * 首页
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CaseHistoryRecord::create([1,2,3,4,5]);
        dd(123);
        /*$data = JTAd::where('user_id',Auth::id())->paginate(8);
        return view('adfission::pages/ad/index',compact('data'));*/
    }

    /**
     * 创建(视图)
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*return view('adfission::pages/ad/create',compact('request'));*/
    }

    /**
     * 创建(提交)
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return CaseHistoryRecord::create($request->toArray());
    }

    /**
     * 详情
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $time = $id;
        $start=date('Y-m-01',$time);//获取指定月份的第一天
        $end=date('Y-m-t',$time); //获取指定月份的最后一天
        return CaseHistoryRecord::whereBetween('created_at',[$start,$end])->get()->toArray();
    }

    /**
     * 编辑
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*$data = JTAd::where('user_id',Auth::id())->find($id);
        return view('adfission::pages/ad/update',compact('data','request'));*/
    }

    /**
     * 更新
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*JTAd::where('user_id',Auth::id())->find($id)->update($request->toArray());
        return redirect('/jc/ad?page='.$request['page']);*/
    }

    /**
     * 删除
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*JTAd::where('user_id',Auth::id())->find($id)->delete();
        return back();*/
    }
}
