<?php
/**
 * Created by PhpStorm.
 * User: Omar_Raafat
 * Date: 11/24/2019
 * Time: 10:09 PM
 */

namespace App\Http\Controllers;


class InfoController extends Controller
{

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

}