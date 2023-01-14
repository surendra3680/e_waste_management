<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Notifications;
use App\Notifications\SendMailNotification;


class SendMailController extends Controller
{
    public  function sendnotification()
    {
        $user=User::all();

        $details=[



        ];
    }
}
