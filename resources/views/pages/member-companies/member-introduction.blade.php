@extends('main')    
@section('title', '会員企業紹介')
@section('titlebar')
    <div class="container">
        <a href="images/head_memberenterprise.jpg" data-toggle="lightbox">
            <img class="title-bar" src="/images/head_memberenterprise.jpg" alt="会員企業紹介">
        </a>
    </div>
@endsection

@section('content')
     <div class="row">
        <div class="col-lg-3">
            @include('partials._sidebar')
        </div>
        
        <div class="col-lg-9">
            <div class="content">

                <div class="card">
                    <div class="card-body">
                        <p>
                            <a href="/images/member_ttl01.jpg" data-toggle="lightbox">
                                <img class="img-fluid" src="images/member_ttl01.jpg" alt="">
                            </a>
                        </p>
                        <p class="text-justify">福岡貿易を支える会員の皆さまをご紹介いたします。会員は、正会員と特別会員（外国政府の出先機関）で構成されています。</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="memberenterprise_detail.php?cg_id=4">
                                    <img class="img-fluid" src="images/member_bnr01_off.jpg" alt="商事">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="memberenterprise_detail.php?cg_id=5">
                                    <img <img class="img-fluid" src="images/member_bnr02_off.jpg" alt="製造・加工">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="memberenterprise_detail.php?cg_id=6">
                                    <img class="img-fluid" src="images/member_bnr03_off.jpg" alt="銀行・保険">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="memberenterprise_detail.php?cg_id=7">
                                    <img class="img-fluid" src="images/member_bnr04_off.jpg" alt="運輸・通信">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="memberenterprise_detail.php?cg_id=8">
                                    <img class="img-fluid" src="images/member_bnr05_off.jpg" alt="諸企業">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="memberenterprise_detail.php?cg_id=9">
                                    <img class="img-fluid" src="images/member_bnr07_off.jpg" alt="特別会員">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="memberenterprise_detail.php">
                                    <img class="img-fluid" src="images/member_bnr06_off.jpg" alt="五十音順">
                                </a>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection