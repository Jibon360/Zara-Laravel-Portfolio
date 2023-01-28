<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Aboutshort;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AboutshortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutshorts = Aboutshort::latest()->paginate(8);
        return view('backend.pages.aboutshort.index', compact('aboutshorts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.aboutshort.create');
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

            'info' => 'required',
            'data' => 'required',
        ]);
        Aboutshort::insert([
            'info' => $request->info,
            'data' => $request->data,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('About Short Information Create success!!');
        return redirect()->route('aboutshort.index')->with('message', 'About Short Information Create success!!');
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
        $aboutshort=Aboutshort::findOrFail($id);
        return view('backend.pages.aboutshort.edit',compact('aboutshort'));
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

            'info' => 'required',
            'data' => 'required',
        ]);
        Aboutshort::findOrFail($id)->update([
            'info' => $request->info,
            'data' => $request->data,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::success('About Short Information Update success!!');
        return redirect()->route('aboutshort.index')->with('message', 'About Short Information Update success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aboutshort::findOrFail($id)->delete();

        Toastr::warning('About Short Information Delete success!!');
        return redirect()->route('aboutshort.index')->with('message', 'About Short Information Delete success!!');
    }
}
