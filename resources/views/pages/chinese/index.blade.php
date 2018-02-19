@extends('main')    
@section('title', '福冈外贸协会')
@section('carousel')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/cn_image01.png" alt="First slide">
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
        <div class="col-lg-12">
            <div class="en-area-concept">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-lg-offset-6">
                        <h1 class="font-weight-bold">关于福冈贸易会</h1>
                        <p class="text-justify">
                                福冈贸易会（FFTA）是贸易公司为了促进福冈地区的对外贸易于1958年设立的社团法人。</p>
                        <p><a href="cn-about-us"><img src="images/en_btn_detail_off.jpg" alt=" more detail"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection