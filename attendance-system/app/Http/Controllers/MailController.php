<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendTestEmail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    //
    public function index()
    {
        $testMailData = [
            'title' => 'Test Email From AllPHPTricks.com',
            'body' => 'This is the body of test email.'
        ];

    $recipientsCount = Mail::to('mohd131mohsin@gmail.com')->send(new SendTestEmail($testMailData));
    dd($recipientsCount);

    }
}
