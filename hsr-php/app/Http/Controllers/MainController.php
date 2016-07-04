<?php

namespace App\Http\Controllers;

use App\Input;
use App\Message;
use App\Http\Controllers\Controller;
use ConfigurationService;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function postAdminConfig(Request $request) {
        $threshold = $request->input('threshold');

        $keys = [
            "about_",
            "about_",
            "about_",
            "about_",
            "about_",
            "about_",
        ];

        foreach ($keys as $key) {
            ConfigurationService::setConfig($key, ($request->input($key) == 1 ? 1 : 0));
        }

        ConfigurationService::setConfig($key, ($request->input($key) == 1 ? 1 : 0));

        return "SUCCESS";
    }

    public function postMessage(Request $request) {
        $message = new Message();
        $message->user_id = 1;
        $message->content = $request->input('content');

        $message->save();

        return "Post successfully!";
    }

}
