<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\Uwamail;
use Illuminate\Support\Facades\Mail;
 
class mailController extends Controller
{
    public function send()
    {
        $title = "UWAMIMA log in Credentials *(keep safe this details)";
        

 
        Mail::to("receiver@example.com")->send(new Uwamail($objDemo));
    }
}