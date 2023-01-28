<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

class Aboutcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::latest()->paginate(10);
        return view('backend.pages.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // id	bigtitle	descriptions	info	data	image	created_at	updated_at	

        $request->validate([
            'bigtitle' => 'required',
            'descriptions' => 'required',

            'image' => 'required',
        ]);

        $image = $request->file('image');
        $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $fileurl = "upload/aboutImage/" . $filename;
        $request->image->move(public_path("upload/aboutImage"), $filename);

        About::insert([
            'bigtitle' => $request->bigtitle,
            'descriptions' => $request->descriptions,
            'image' => $fileurl,
            'created_at' => Carbon::now(),
        ]);
        Toastr::success('About Information Create success!!');
        return redirect()->route('about.index')->with('message', 'About Information Create success!!');
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
        $about = About::findOrFail($id);
        return view('backend.pages.about.edit', compact('about'));
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
                'bigtitle' => 'required',
                'descriptions' => 'required',
                'image' => 'required',
            ]);



            $image = $request->file('image');
            $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $fileurl = "upload/aboutImage/" . $filename;
            $request->image->move(public_path("upload/aboutImage"), $filename);

            About::findOrFail($id)->update([
                'bigtitle' => $request->bigtitle,
                'descriptions' => $request->descriptions,
                'image' => $fileurl,
                'updated_at' => Carbon::now(),
            ]);
        } else {
            $request->validate([
                'bigtitle' => 'required',
                'descriptions' => 'required',
            ]);

            About::findOrFail($id)->update([
                'bigtitle' => $request->bigtitle,
                'descriptions' => $request->descriptions,
                'updated_at' => Carbon::now(),
            ]);
        }
        Toastr::success('About Information Update success!!');
        return redirect()->route('about.index')->with('message', 'About Information Update success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = About::findOrFail($id);

        if (File::exists($data->image)) {
            File::delete($data->image);
        }
        $data->delete();

        Toastr::warning('About Information Delete success!!');
        return redirect()->route('about.index')->with('message', 'About Information Delete success!!');
    }
}
