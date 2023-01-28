<?php

namespace App\Http\Controllers\Amdin;

use Carbon\Carbon;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->paginate(10);
        return view('backend.pages.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // id	title	descriptions	image	created_at	updated_at
        $request->validate([
            'title' => 'required',
            'descriptions' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $fileurl = "upload/BannerImage/" . $filename;
        $request->image->move(public_path("upload/BannerImage"), $filename);

        Banner::insert([
            'title' => $request->title,
            'descriptions' => $request->descriptions,
            'image' => $fileurl,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Banner Create success!!');
        return redirect()->route('banner.index')->with('message', 'Banner Create success!!');
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
        $banner = Banner::findOrFail($id);

        return view('backend.pages.banner.edit',compact('banner'));
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
        if ($request->file('image')) {
            $request->validate([
                'title' => 'required',
                'descriptions' => 'required',
                'image' => 'required',
            ]);

            $data = Banner::findOrFail($id);

            $image = $request->file('image');
            $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $fileurl = "upload/BannerImage/" . $filename;
            $request->image->move(public_path("upload/BannerImage"), $filename);

            if (File::exists($data->image)) {
                unlink($data->image);
            }

            Banner::findOrFail($id)->update([
                'title' => $request->title,
                'descriptions' => $request->descriptions,
                'image' => $fileurl,
                'updated_at' => Carbon::now(),
            ]);
        } else {
            $request->validate([
                'title' => 'required',
                'descriptions' => 'required',
            ]);

            Banner::findOrFail($id)->update([
                'title' => $request->title,
                'descriptions' => $request->descriptions,
                'updated_at' => Carbon::now(),
            ]);
        }

        Toastr::info('Banner Updated success!!');
        return redirect()->route('banner.index')->with('message', 'Banner Updated success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Banner::findOrFail($id);

        if (File::exists($data->image)) {
            File::delete($data->image);
        }
        $data->delete();

        Toastr::warning('Banner Delete success!!');
        return redirect()->route('banner.index')->with('message', 'Banner Delete success!!');
    }
}
