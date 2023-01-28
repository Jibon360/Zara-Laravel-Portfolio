<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\ProjectInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProjectinformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectinofos = ProjectInfo::latest()->paginate(10);

        return view('backend.pages.project.index', compact('projectinofos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.project.create');
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
            'number' => 'required',
        ]);

        ProjectInfo::insert([
            'title' => $request->title,
            'number' => $request->number,
            'created_at' => Carbon::now(),

        ]);

        Toastr::success('Pruject Information Create success!!');
        return redirect()->route('projectinofo.index')->with('message', 'Pruject Information Create success!!');
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
        $projectinofo = ProjectInfo::findOrFail($id);
        return view('backend.pages.project.edit', compact('projectinofo'));
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
            'number' => 'required',
        ]);

        ProjectInfo::findOrFail($id)->update([
            'title' => $request->title,
            'number' => $request->number,
            'updated_at' => Carbon::now(),

        ]);

        Toastr::success('Pruject Information Update success!!');
        return redirect()->route('projectinofo.index')->with('message', 'Pruject Information Update success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectInfo::findOrFail($id)->delete();
        Toastr::warning('Pruject Information Delete success!!');
        return redirect()->route('projectinofo.index')->with('message', 'Pruject Information Delete success!!');
    }
}
