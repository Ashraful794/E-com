<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactFormController extends Controller
{
    public function contact_us(Request $request)
    {
            if($request->isMethod('post')){
            $data = $request->all();
            $name=$data['name'];
            $email=$data['email'];
            $subject=$data['subject'];
            $text=$data['message'];
                $messageData=[
                    'email'=>$email,
                    'name'=>$name,
                    'subject'=>$subject,
                    'text'=>$text,
                ];
                Mail::send('E-com.email.contactform',$messageData,function($message) use($email){
                $message->to("ashraful01934207337@gmail.com")->subject('Customer Query');
            });
                return redirect()->back()->with('flash_message_success','Message have been sent Successfully!');        
        }
        else{
            return view('E-com.contact_us');
        }
        
    }
}
