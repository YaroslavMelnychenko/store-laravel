<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class FeedbackController extends Controller
{
    public function sendFeedback(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:40',
            'theme' => 'required|max:40',
            'email' => 'required|email',
            'text' => 'required|max:500'
        ]);
        if($validator->fails()){
            return response('validation error', 500);
        } else {
            return response('success', 200);
        }
    }
}
