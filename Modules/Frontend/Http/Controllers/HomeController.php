<?php
/**
 * Created by PhpStorm.
 * User: MinhPT
 * Date: 11/8/2017
 * Time: 15:30
 */

namespace Modules\Frontend\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Route;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend::home.index');
    }
}