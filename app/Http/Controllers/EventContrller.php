<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Event;
use App\Events\SendEmail;

class EventContrller extends Controller
{
    public function index(){
        Event::dispatch(new SendEmail(1));
    }
}
