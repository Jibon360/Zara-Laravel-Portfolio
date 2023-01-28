<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class Backendcontroller extends Controller
{
    public function index()
    {
        // $messages=Message::count();
        
        return view('backend.pages.dashboard.index');
    }

    public function showmessage()
    {
        $message_count=Message::count();
        $messages=Message::latest()->paginate(10);
        return view('backend.pages.messages.index',compact('messages','message_count'));
    }
    public function destroy($id)
    {
       Message::findOrFail($id)->delete();
       Toastr::warning('User Message Deleted success!!');
        return redirect()->route('show.message')->with('message', 'User Message Deleted success!!');
    }

    public function view($id)
    {
        $message=Message::findOrFail($id);
        return view('backend.pages.messages.view',compact('message'));
    }
}
