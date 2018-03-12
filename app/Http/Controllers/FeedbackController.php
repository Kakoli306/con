<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FeedbackRequest;
use Mail;
use App\Mail\NewContactrequest;

class FeedbackController extends Controller
{
    public function show(){
      return view('feedback');
    }

    public function mail(  FeedbackRequest $request)
    {

    //  echo $request->input('email');

      Mail::to('admin@gmail.com')->send(new NewContactrequest($request));

      //dd($request);
      //return view('feedback');

      return back()->with('status','Your message has been received');
    }
}
