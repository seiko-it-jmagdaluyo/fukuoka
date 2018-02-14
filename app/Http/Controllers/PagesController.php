<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function getIndex(){
        return view('pages.main.index');
    }

    public function get_members_page(){
        return view('pages.main.members');
    }

    public function get_contact_us(){
        return view('pages.main.contact');
    }


    public function get_ftc(){
        return view('pages.trade-admission.fuokuka-trading-council');
    }
}
