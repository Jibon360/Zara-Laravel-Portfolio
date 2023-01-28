<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Animatedheadline;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AnimateHeadlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animatedheadlines = Animatedheadline::latest()->paginate(10);
        return view('backend.pages.animated.index', compact('animatedheadlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.animated.create');
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
            'title' => 'required',
        ]);

        Animatedheadline::insert([
            'title' => $request->title,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Animated Text Create success!!');
        return redirect()->route('animatedheadline.index')->with('message', 'Animated Text Create success!!');
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
        $animatedheadline=Animatedheadline::findOrFail($id);

        return view('backend.pages.animated.edit',compact('animatedheadline'));
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
            'title' => 'required',
        ]);

        Animatedheadline::findOrFail($id)->update([
            'title' => $request->title,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::info('Animated Text Update success!!');
        return redirect()->route('animatedheadline.index')->with('message', 'Animated Text Update success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animatedheadline::findOrFail($id)->delete();
        Toastr::warning('Animated Text Delete success!!');
        return redirect()->route('animatedheadline.index')->with('message', 'Animated Text Delete success!!');
    }
}
