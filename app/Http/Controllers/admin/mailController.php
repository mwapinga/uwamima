<?php
namespace App\Http\Controllers\admin;
 
use App\Http\Controllers\Controller;
use App\Mail\Uwamail;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;

 
class mailController extends Controller
{
    public function send()
    {
        $title = "UWAMIMA log in Credentials *(keep safe this details)";
        

 
        Mail::to("receiver@example.com")->send(new Uwamail($objDemo));
    }
}