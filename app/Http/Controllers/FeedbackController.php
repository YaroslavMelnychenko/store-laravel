<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Feedback;
use App\Events\CreatedFeedback;

class FeedbackController extends Controller
{
    public function createFeedback(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:40',
            'theme' => 'required|max:40',
            'email' => 'required|email',
            'text' => 'required|max:500'
        ]);
        if($validator->fails()){
            return response('validation error', 500);
        } else {
            if(Feedback::create([
                'name' => $request->name,
                'theme' => $request->theme,
                'email' => $request->email,
                'text' => $request->text
            ])){
                return response('success', 200);
            }
        }
    }

    public function sendFeedback() {
        $feedbacks = Feedback::where('is_shipped', false)->get();
        foreach($feedbacks as $feedback){
            if(event(new CreatedFeedback($feedback))){
                $feedback->is_shipped = true;
                $feedback->save();
            }
        }
    }
}
