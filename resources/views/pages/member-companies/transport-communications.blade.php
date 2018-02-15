@extends('main')    
@section('title', '運輸・通信')
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
                    <div class="card-header">
                        運輸・通信
                    </div>
                    <div class="card-body">
                        List from DB
                        {{--  FOREACH HERE  --}}
                        <div class="table-responsive-lg">
                            <table class="table table-bordered text-justify">
                                <tr>
                                    <td class="table-info text-center">会社名</td>
                                    <td>From DB</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">代表者</td>
                                    <td>From DB</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">住　所</td>
                                    <td>From DB</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">TEL / FAX</td>
                                    <td>TEL : From DB</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">URL</td>
                                    <td>From DB</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">事業概要</td>
                                    <td>From DB</td>
                                </tr>
                            </table>
                        </div>
                        {{--  END FOREACH HERE  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection