<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function contactForm(){
        return view('web.contact-us');
    }
    function submitContact(Request $request){
/*        $data=array();*/
        $validation=$request->validate([
            'full_name'=>'required',
            'email'=>'email:rfc,dns',
//            'number'=>'required,digits_between:9,10',
           // 'subject'=>'required,In:1,2,3,4',
        ]);
        $data=$request->all();
        $contact=new ContactUs();
        $contact->full_name=$data['full_name'];
        $contact->email=$data['email'];
        $contact->number=$data['number'];
        $contact->subject=$data['subject'];
        $contact->number_of_order=$data['number_of_order'];
        $contact->message=$data['message'];
        $contact->save();
//        ContactUs::create($validation);
        toastr()->success('پیام با موفقیت ارسال شد');
        toastr()->error('پیام با موفقیت ارسال شد');
        toastr()->warning('پیام با موفقیت ارسال شد');
        toastr()->info('پیام با موفقیت ارسال شد');
        return back();
    }
}
