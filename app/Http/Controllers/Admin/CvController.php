<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cv;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvs = Cv::latest()->paginate(10);

        return view('backend.pages.cv.index', compact('cvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.cv.create');
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
            'cvfile' => 'required',
        ]);

        $cvfile = $request->file('cvfile');
        $filename = hexdec(uniqid()) . '.' . $cvfile->getClientOriginalExtension();
        $fileurl = "upload/cv/" . $filename;
        $request->cvfile->move(public_path("upload/cv"), $filename);


        Cv::insert([
            'cvfile' => $fileurl,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Cv Upload  success!!');
        return redirect()->route('cv.index')->with('message', 'Cv Upload  success!!');
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
        $cv = Cv::FindOrFail($id);

        return view('backend.pages.cv.edit', compact('cv'));
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
        if ($request->file('cvfile')) {
            $request->validate([
                'cvfile' => 'required',
            ]);

            $data = Cv::FindOrFail($id);

            $cvfile = $request->file('cvfile');
            $filename = hexdec(uniqid()) . '.' . $cvfile->getClientOriginalExtension();
            $fileurl = "upload/cv/" . $filename;
            $request->cvfile->move(public_path("upload/cv"), $filename);

            if (File::exists($data->cvfile)) {
                unlink($data->cvfile);
            }


            Cv::findOrFail($id)->update([
                'cvfile' => $fileurl,
                'updated_at' => Carbon::now(),
            ]);
        } else {
            return redirect()->route('cv.index')->with('message', 'Cv Updated  success!!');
        }

        Toastr::info('Cv Updated  success!!');
        return redirect()->route('cv.index')->with('message', 'Cv Updated  success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Cv::findOrFail($id);

        if (File::exists($data->cvfile)) {
            File::delete($data->cvfile);
        }

        $data->delete();

        Toastr::warning('Cv Delete  success!!');
        return redirect()->route('cv.index')->with('message', 'Cv Delete  success!!');
    }
}
