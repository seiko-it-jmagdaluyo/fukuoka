@extends('main')    
@section('title', 'セミナー案内')
@section('titlebar')
    <div class="container">
        <a href="images/h2_kokusai.jpg" data-toggle="lightbox">
            <img class="title-bar" src="images/head_seminar.jpg" alt="福岡貿易会では、福岡地域の貿易振興を目的としたセミナー・ゼミを 随時開催しております。">
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
                            <a href="images/seminar_ttl01.jpg" data-toggle="lightbox">
                                <img class="img-fluid" src="images/seminar_ttl01.jpg" alt="">
                            </a>
                        </p>
                        <p class="text-justify">福岡貿易会では、貿易に携わる人のためにセミナーを開催し、ビジネスの現場でお役立ていただいています。講師は、実務経験豊富で、様々な講習会に人気の先生ばかりです。 また、その時々の貿易事情に素早く対応した特別セミナーも実施しており、タイムリーな企画をご提供しています。</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        セミナー一覧
                    </div>
                    <div class="card-body">
                        <h1 class="list-header">
                            LIST OF SEMINARS FROM DB
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection