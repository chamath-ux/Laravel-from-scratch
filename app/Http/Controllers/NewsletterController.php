<?php

namespace App\Http\Controllers;

use App\services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([

            'email'=>'required|email'
        ]);

        try{

            $newsletter->subscribe(request('email'));

        }catch(\Exception $e){

            \Illuminate\validation\ValidationException::WithMessages([

                'email'=>'You Provided Email not valid'
            ]);
        }

        return redirect('/')->with(['status'=>'You have been subscribed']);

    }
}
