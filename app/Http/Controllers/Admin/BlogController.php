<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('backend.pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('backend.pages.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // id	category_id	bigtitle	descriptions	image	created_at	updated_at	

        $request->validate([
            'category_id' => 'required',
            'bigtitle' => 'required',
            'descriptions' => 'required',
            'image' => 'required',

        ]);

        $image = $request->file('image');
        $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $fileurl = "upload/BlogImage/" . $filename;
        $image->move(public_path("upload/BlogImage"), $filename);


        Blog::insert([
            'category_id' => $request->category_id,
            'bigtitle' => $request->bigtitle,
            'descriptions' => $request->descriptions,
            'image' => $fileurl,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Blog Create success!!');
        return redirect()->route('blog.index')->with('message', 'Blog Create success!!');
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
        $categories = Category::latest()->get();
        
        $blog = Blog::findOrFail($id);
        return view('backend.pages.blog.edit',compact(['blog','categories']));
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
                'category_id' => 'required',
                'bigtitle' => 'required',
                'descriptions' => 'required',
                'image' => 'required',

            ]);

            $data = Blog::findOrFail($id);

            $image = $request->file('image');
            $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $fileurl = "upload/BlogImage/" . $filename;
            $image->move(public_path("upload/BlogImage"), $filename);

            if (File::exists($data->image)) {
                unlink($data->image);
            }

            Blog::findOrfail($id)->update([
                'category_id' => $request->category_id,
                'bigtitle' => $request->bigtitle,
                'descriptions' => $request->descriptions,
                'image' => $fileurl,
                'created_at' => Carbon::now(),
            ]);
        } else {
            $request->validate([
                'category_id' => 'required',
                'bigtitle' => 'required',
                'descriptions' => 'required',

            ]);


            Blog::findOrfail($id)->update([
                'category_id' => $request->category_id,
                'bigtitle' => $request->bigtitle,
                'descriptions' => $request->descriptions,
                'created_at' => Carbon::now(),
            ]);
        }
        Toastr::info('Blog Updated success!!');
        return redirect()->route('blog.index')->with('message', 'Blog Updated success!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Blog::findOrFail($id);
        if (File::exists($data->image)) {
            File::delete($data->image);
        }

        $data->delete();

        Toastr::success('Blog Deleted success!!');
        return redirect()->route('blog.index')->with('message', 'Blog Deleted success!!');
    }
}
