<?php
/**
 * Created by PhpStorm.
 * User: MinhPT
 * Date: 11/8/2017
 * Time: 15:30
 */

namespace Modules\Frontend\Http\Controllers;


use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend::home.index');
    }
}