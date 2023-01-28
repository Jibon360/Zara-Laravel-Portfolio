<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes=Resume::latest()->paginate(10);
        return view('backend.pages.resume.index',compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'short_title'=>'required',
            'descriptions'=>'required',
        ]);
        Resume::insert([
            'title'=>$request->title,
            'short_title'=>$request->short_title,
            'descriptions'=>$request->descriptions,
            'created_at'=>Carbon::now(),
        ]);

        Toastr::success('Resume Item Create success!!');
        return redirect()->route('resume.index')->with('message', 'Resume Item Create success!!');
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
        $resume= Resume::findOrFail($id);
     
        return view('backend.pages.resume.edit',compact('resume'));
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
        $request->validate([
            'title'=>'required',
            'short_title'=>'required',
            'descriptions'=>'required',
        ]);
        Resume::findOrFail($id)->update([
            'title'=>$request->title,
            'short_title'=>$request->short_title,
            'descriptions'=>$request->descriptions,
            'created_at'=>Carbon::now(),
        ]);

        Toastr::info('Resume Item Updated success!!');
        return redirect()->route('resume.index')->with('message', 'Resume Item Updated success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Resume::findOrFail($id)->delete();
        Toastr::warning('Resume Item Delete success!!');
        return redirect()->route('resume.index')->with('message', 'Resume Item Delete success!!');
    }
}
