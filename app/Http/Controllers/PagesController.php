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
    public function get_sitemap(){
        return view('pages.main.site-map');
    }
    public function get_privacy(){
        return view('pages.main.privacy-policy');
    }

    //FUKOUKA TRADING COUNCIL PAGES
    public function get_ftc(){
        return view('pages.introduction.fuokuka-trading-council');
    }
    public function get_cma(){
        return view('pages.introduction.council-main-activities');
    }
    public function get_ag(){
        return view('pages.introduction.admission-guidance');
    }

    //TRADE CONSULTING COUMCIL PAGES
    public function get_intl_business(){
        return view('pages.trade-consulting.international-busines');
    }
    public function get_adviser_list(){
        return view('pages.trade-consulting.adviser-list');
    }
    
    //SEMINAR PAGES
    public function get_seminar_info(){
        return view('pages.seminar.info');
    }
    
    //MEMBER COMPANIES PAGES
    public function get_member_introduction(){
        return view('pages.member-companies.member-introduction');
    }
    public function get_commercial_operation(){
        return view('pages.member-companies.commercial-operation');
    }
    public function get_manufacturing_processing(){
        return view('pages.member-companies.manufacturing-processing');
    }
    public function get_bank_insurance(){
        return view('pages.member-companies.bank-insurance');
    }
    public function get_transport_communications(){
        return view('pages.member-companies.transport-communications');
    }
    public function get_all_interprises(){
        return view('pages.member-companies.all-interprises');
    }
    public function get_special_members(){
        return view('pages.member-companies.special-members');
    }
    public function get_alphabetical_order(){
        return view('pages.member-companies.alphabetical-order');
    }
    
    //FUOKUKA NEWS PAGES
    public function get_fuokuka_news(){
        return view('pages.fuokuka-news.news');
    }
    
    //FUOKUKA ENGLISH PAGES
    public function get_en_ftc(){
        return view('pages.english.index');
    }
    public function get_en_aboutus(){
        return view('pages.english.about-us');
    }
    
    //FUOKUKA CHINESE PAGES
    public function get_cn_ftc(){
        return view('pages.chinese.index');
    }
    public function get_cn_aboutus(){
        return view('pages.chinese.about-us');
    }
}
