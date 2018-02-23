@extends('main')    
@section('title', 'About Us')
@section('titlebar')
    <div class="container">
        <a href="images/en_head_introduction.jpg" data-toggle="lightbox">
            <img class="img-fluid" src="images/en_head_introduction.jpg" alt="About Us"/>
        </a>
    </div>
@endsection

@section('content')
     <div class="row">
        <div class="col-lg-12">
            <div class="content">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Outline
                        </div>
                        <div class="card-body">
                            <p class="text-justify">
                                Fukuoka Foreign Trade Association (FFTA) is an incorporated association established by trading companies and organizations in 1958 for the purpose of promoting foreign trade in the Fukuoka area. FFTA has been carrying 
                                out projects to help its members expand their businesses and encourage mutual exchange. 
                            </p>
                            <p class="text-justify">
                                In addition to publishing a newsletter for members, FFTA also conducts trade consulting, business seminars and company visits. With its move to the Asian Economic Exchange Center in the Elgala Building in July 1997, FFTA 
                                has exerted a new line of services to encourage international economic exchange between Fukuoka/Kyushu and the rest of the world, particularly Asia, by providing information services, training programs and trade counseling not only with members but with non-member companies as well.
                            </p>    
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            Services
                        </div>
                        <div class="card-body">
                            <ol class="">
                                <li  class="text-justify">Providing trade-related information and opportunities to meet business partners</li>
                                <li  class="text-justify">Holding trade-related seminars, lectures and conferences </li>
                                <li  class="text-justify">Dispatching delegations to overseas and inviting delegations from abroad</li>
                                <li  class="text-justify">Promoting the improvements of trade-related functions and facilities in Fukuoka such as inviting overseas trade offices to open in Fukuoka and increasing the number of sea lines to and from Fukuoka</li>
                                <li  class="text-justify">Other services to attain the organization's objectives</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            Member Companies
                        </div>
                        <div class="card-body">

                            <p class="text-justify">Trade-related companies and organizations ranging from trading companies to as manufacturers, financial companies and transportation companies and foreign government offices located in Fukuoka City.</p>
                            <div class="text-center">
                                <a href="images/jimusyo01.jpg" data-toggle="lightbox">
                                    <img class="img-fluid big-mg-space" src="images/jimusyo01.jpg" alt="Fukuoka Trade Firm Office">
                                </a>
                            </div>
                            <div class="table-responsive-lg">
                                <table class="table table-bordered text-justify">
                                    <tr>
                                        <td class="table-info text-center">Name</td>
                                        <td>Fukuoka Foreign Trade Association</td>
                                    </tr>
                                    <tr>
                                        <td class="table-info text-center">Address</td>
                                        <td>2-9-28 Hakataekimae, Hakata-ku, Fukuoka City 812-0011 Japan</td>
                                    </tr>
                                    <tr>
                                        <td class="table-info text-center">Foundation</td>
                                        <td>1974.7th.December</td>
                                    </tr>
                                    <tr>
                                        <td class="table-info text-center">Chairman</td>
                                        <td>Naonori Tsuchiya (Chairman, SEIKO ELECTRIC)</td>
                                    </tr>
                                    <tr>
                                        <td class="table-info text-center">Objective</td>
                                        <td>Promoting international trade and development of local economy in Fukuoka and surrounding area.</td>
                                    </tr>
                                    <tr>
                                        <td class="table-info text-center">Inquiries</td>
                                        <td>E-mail: info@fukuoka-fta.or.jp</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection