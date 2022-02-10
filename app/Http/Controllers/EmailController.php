<?php

namespace App\Http\Controllers;

use App\Mail\RecapCommande;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Test;
use Illuminate\Support\Facades\Auth;


class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function send(Request $request)
    {
        new RecapCommande();
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'content' => 'required',
        ]);

        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content
        ];

        return back()->with(['message' => 'Email successfully sent!']);
    }
    public function testMail()
    {
        $data = Mail::to(Auth::user()->email)->send(new RecapCommande());
    }
}
