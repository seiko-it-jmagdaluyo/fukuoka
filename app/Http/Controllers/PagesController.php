<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //TOP NAVIGATION PAGES
    public function getIndex(){
        return view('pages.main.index');
    }

    public function get_members_page(){
        return view('pages.main.members');
    }

    public function get_contact_us(){
        return view('pages.main.contact');
    }

    //FUKOUKA TRADING COUMCIL PAGES
    public function get_ftc(){
        return view('pages.introduction.fuokuka-trading-council');
    }

    public function get_cma(){
        return view('pages.introduction.council-main-activities');
    }

    public function get_ag(){
        return view('pages.introduction.admission-guidance');
    }
    
}
