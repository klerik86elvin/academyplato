<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Mail\SendMail;
use App\Models\Career;
use App\Models\MailType;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function index()
    {
        $data = Career::all();

        return view('career.index', compact('data'));
    }
    public function sendMail()
    {
        $mailTypes = MailType::all();
//        return $mailTypes->first();
        return view('forms.send-mail', compact('mailTypes'));
    }

    public function post(SendMailRequest $request)
    {

        $data = $request->validated();
        $filePath = null;
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $fileName  = uniqid().$file->getClientOriginalName();
            $file->move('uploads', $fileName);
            $filePath = \Illuminate\Support\Facades\Request::url().'/uploads/'.$fileName;
            $data['file'] = $filePath;
        }
        Mail::to('elvin.m9292@gmail.com')->send(new SendMail($data));
        return redirect()->back()->with('success', __('Sorğunuz qəbul olundu'));
    }
}
