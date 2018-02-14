@extends('main')    
@section('title', 'Home')
@section('carousel')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/image01.png" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="images/image02.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="images/image03.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection

@section('content')
     <div class="row">
        <div class="col-lg-3">
            @include('partials._sidebar')
        </div>
        
        <div class="col-lg-9">
            <div class="row area-concept">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-lg-offset-6">
                        <img class="img-fullstreched img-responsive" src="images/title_concept.png" alt="福岡貿易会とは" />
                        <p class="text-justify">貿易の振興による地域の発展を目的として福岡市及び周辺経済圏の貿易関連企業により設立されました。アジア経済交流センタ－や中国上海貿易代表処を運営し、アジアを中心対象に貿易振興のための事業に取り組んでいる公益社団法人です。</p>
                        <p><a href="introduction_index.php"><img src="images/btn_detail_off.jpg" alt="詳細はこちら" /></a></p>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <a href="introduction_index02.html"><img src="images/btn_jigyou_off.png" alt="事業内要" /></a>
                </div>
                <div class="col-lg-6 text-center">
                    <a href="introduction_index03.html"><img src="images/btn_nyukai_off.png" alt="" /></a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <img class="img-fullstreched" src="images/title_news.jpg" alt="福岡貿易会からのお知らせ">
                </div>
            </div>

            <div class="row announcement-list">
                <div class="col-lg-12">
                    <a class="float-right" href="news_index.php?type=1"><img src="images/btn_list_off.jpg" alt="一覧はこちら"></a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-fullstreched" src="images/title_seminar.jpg" alt="関連団体からのお知らせ">
                </div>
            </div>

            <div class="row information-list">
                <div class="col-lg-12">
                    <a class="float-right" href="news_index.php?type=1"><img src="images/btn_list_off.jpg" alt="一覧はこちら"></a>
                </div>
            </div>
        </div>
    </div>     
@endsection