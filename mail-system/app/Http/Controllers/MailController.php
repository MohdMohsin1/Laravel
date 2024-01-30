<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestEmail;
class MailController extends Controller
{
    //
    public function index()
{
    $MailData = [
        'title' => 'Test Email',
        'body' => 'This is the body of test email.'
    ];

$recipientsCount = Mail::to('mohd131mohsin@gmail.com')->send(new MyTestEmail($MailData));
dd($recipientsCount);

}
                        
}
