<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;

class NewUserController extends Controller
{
    //
    public function create()
    {

        $userData = [
            "id" => 1,
            "name" => "Lawrence",
            "Age" => 20,
        ];
        Redis::publish('user', json_encode($userData));
    }
}
