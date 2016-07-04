<?php

namespace App\Http\Controllers;

use App\Input;
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
}
