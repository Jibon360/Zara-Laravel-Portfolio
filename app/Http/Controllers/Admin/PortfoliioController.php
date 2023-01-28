<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cv;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

class PortfoliioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('backend.pages.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.portfolio.create');
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
            'image' => 'required',
        ]);
        $image = $request->file('image');
        $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $fileurl = "upload/portfolio/" . $filename;
        $request->image->move(public_path("upload/portfolio"), $filename);

        Portfolio::insert([
            'image' => $fileurl,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Portfolio Information Create success!!');
        return redirect()->route('portfolio.index')->with('message', 'Portfolio Information Create success!!');
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
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.pages.portfolio.edit', compact('portfolio'));
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
                'image' => 'required',
            ]);
            $image = $request->file('image');
            $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $fileurl = "upload/portfolio/" . $filename;
            $request->image->move(public_path("upload/portfolio"), $filename);

            $portfolio = Portfolio::findOrFail($id);

            if (File::exists($portfolio->image)) {
                unlink($portfolio->image);
            }

            Portfolio::findOrFail($id)->update([
                'image' => $fileurl,
                'updated_at' => Carbon::now(),
            ]);
        } else {
            return redirect()->route('portfolio.index')->with('message', 'Portfolio Information update success!!');
        }
        Toastr::success('Portfolio Information update success!!');
        return redirect()->route('portfolio.index')->with('message', 'Portfolio Information update success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Portfolio::findOrFail($id);

        if (File::exists($data->image)) {

            File::delete($data->image);
        }
        $data->delete();

        Toastr::warning('Portfolio Image Delete success!!');
        return redirect()->route('portfolio.index')->with('message', 'Portfolio Image Delete success!!');
    }
}
