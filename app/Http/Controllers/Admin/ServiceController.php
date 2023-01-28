<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('backend.pages.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.service.create');
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
            'icon' => 'required',
            'title' => 'required',
            'descripiton' => 'required',
        ]);

        Service::insert([
            'icon' => $request->icon,
            'title' => $request->title,
            'descripiton' => $request->descripiton,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Service Information Create success!!');
        return redirect()->route('service.index')->with('message', 'Service Information Create success!!');
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
        $service=Service::findOrFail($id);
        return view('backend.pages.service.edit',compact('service'));
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
            'icon' => 'required',
            'title' => 'required',
            'descripiton' => 'required',
        ]);

        Service::findOrFail($id)->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'descripiton' => $request->descripiton,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::info('Service Information Update success!!');
        return redirect()->route('service.index')->with('message', 'Service Information Update success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::findOrFail($id)->delete();
        Toastr::warning('Service Information Delete success!!');
        return redirect()->route('service.index')->with('message', 'Service Information Delete success!!');

    }
}
