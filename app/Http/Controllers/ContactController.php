<?php

namespace App\Http\Controllers;

use App\contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function Message(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        Toastr::success('Your message successfully send.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
