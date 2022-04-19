<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class IndexController extends Controller
{
    public function index()
    {
        Nexmo::message()->send([
            'to' => '2349026906119',
            'from' => '2347062465404',
            'text' => 'Test SMS',
        ]);

        echo "Message Sent";
    }
}
