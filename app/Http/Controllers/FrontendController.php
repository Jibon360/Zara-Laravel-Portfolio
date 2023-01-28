<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Logo;
use App\Models\About;
use App\Models\Banner;
use App\Models\Footer;
use App\Models\Resume;
use App\Models\Message;
use App\Models\Service;
use App\Models\Aboutshort;
use App\Models\ProjectInfo;
use Illuminate\Http\Request;
use App\Models\Animatedheadline;
use Brian2694\Toastr\Facades\Toastr;




class FrontendController extends Controller
{
    public function index()
    {

        $logo = Logo::select('logo_name')->first();
        $animatedheadlines = Animatedheadline::select('title')->get();
        $banner = Banner::select('title', 'descriptions', 'image')->first();
        $about = About::select('bigtitle', 'descriptions', 'image')->first();
        $aboutshorts = Aboutshort::select('data', 'info')->get();
        $services = Service::select('icon', 'title', 'descripiton')->get();
        $projectinofos = ProjectInfo::select('title', 'number')->get();
        $resumes = Resume::select('title', 'short_title', 'descriptions')->get();
        $footer = Footer::select('footer_text')->first();
        $cv = Cv::latest()->first();
        $blogs = Blog::with('category')->latest()->get();
        return view('frontend.index', compact(['logo', 'about', 'aboutshorts', 'services', 'projectinofos', 'resumes', 'footer', 'animatedheadlines', 'banner', 'cv', 'blogs']));
    }

    public function message()
    {
        $logo = Logo::select('logo_name')->first();
        $animatedheadlines = Animatedheadline::select('title')->get();
        $banner = Banner::select('title', 'descriptions', 'image')->first();
        $about = About::select('bigtitle', 'descriptions', 'image')->first();
        $aboutshorts = Aboutshort::select('data', 'info')->get();
        $services = Service::select('icon', 'title', 'descripiton')->get();
        $projectinofos = ProjectInfo::select('title', 'number')->get();
        $resumes = Resume::select('title', 'short_title', 'descriptions')->get();
        $footer = Footer::select('footer_text')->first();
        $cv = Cv::latest()->first();
        $blogs = Blog::with('category')->latest()->get();
        return view('frontend.index', compact(['logo', 'about', 'aboutshorts', 'services', 'projectinofos', 'resumes', 'footer', 'animatedheadlines', 'banner', 'cv','blogs']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Message::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Message Sent success!!');
        return redirect()->route('user.message')->with('message', 'Message Sent success!!');
    }


    public function singleblogpage($id)
    {
        $logo = Logo::select('logo_name')->first();
        $blogs = Blog::with('category')->latest()->get();
        $singleblog = Blog::with('category')->findOrFail($id);
        $recentblogs = Blog::with('category')->take(4)->latest()->get();
        $relatedblogs = Blog::where('category_id',$singleblog->category_id)->where('id','!=',$singleblog->id)->latest()->get();
        

     
        return view('frontend.singe_blog', compact(['singleblog', 'recentblogs','relatedblogs','logo','blogs']));
    }
}
