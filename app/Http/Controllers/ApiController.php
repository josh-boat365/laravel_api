<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $list_of_apis = [
            'customer_api',
            'office_api',
            'gob3_api'
        ];

        $li = "";

        foreach ($list_of_apis as $api) {
        $li .= "<li>". $api ."</li>";
        }
        return $li;
    }
}
