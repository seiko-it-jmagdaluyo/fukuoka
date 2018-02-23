@extends('main')    
@section('title', 'お問い合わせ')
@section('titlebar')
    <div class="container">
        <a href="images/head_contact.jpg" data-toggle="lightbox">
            <img class='title-bar' src="images/head_contact.jpg" alt="Contact Us">
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
                            お問い合わせフォーム
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <p class="text-justify">お問い合わせの際には必ず以下をお読みください。</p>

                            <p class="text-justify">福岡貿易会では、ご指定のメールアドレス宛への迅速な回答を心がけておりますが、 お問い合わせ内容によりましては回答まで にお時間をいただく場合がございます。
                                また、状況により電話にてご対応をさせていただく場合がございますので、予めご了承ください。</p>
                            
                            <p class="text-justify">＊お電話でのお問い合わせにつきましては以下番号におかけください。</p>
                        </div>
                        
                        <div class="col-lg-12 text-center big-mg-space">
                            <a href="images/img_contact.png" data-toggle="lightbox">
                                <img class="img-fluid" src="images/img_contact.png" alt="TEL 092-452-0707">
                            </a>
                        </div>  

                        <div class="card big-pd-space contact-form">
                            <div class="card-block">
                                <div class="col-md-12">
                                    <p class="text-justify"><span class="required">※ 印 </span> は必須項目となっております。</p>
            
                                    <form>
                                        <div class="form-group row">
                                            <label for="company_name" class="col-sm-4 col-form-label">会社名<span class="required">※</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="会社名">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="belonging_department" class="col-sm-4 col-form-label">所属部課</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="belonging_department" name="belonging_department" placeholder="所属部課">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="position" class="col-sm-4 col-form-label">役　職</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="position" name="position" placeholder="役　職">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-4 col-form-label">氏　名<span class="required">※</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="氏　名">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="zip_code" class="col-sm-4 col-form-label">郵便番号<span class="required">※</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="郵便番号">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="address" class="col-sm-4 col-form-label">住　所<span class="required">※</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="address" name="address" placeholder="住　所">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="telephone" class="col-sm-4 col-form-label">TEL<span class="required">※</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="TEL">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="fax" class="col-sm-4 col-form-label">FAX</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="fax" name="fax" placeholder="FAX">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="consultation_type" class="col-sm-4 col-form-label">相談の種類<span class="required">※</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="consultation_type" name="consultation_type">
                                                    <option value="貿易全般">貿易全般</option>
                                                    <option value="輸入">輸入</option>
                                                    <option value="輸出">輸出</option>
                                                    <option value="その他">その他</option>
                                                </select>
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="consultation_content" class="col-sm-4 col-form-label">相談内容<span class="required">※</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="consultation_content" name="consultation_content"></textarea>
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label">メールアドレス</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="メールアドレス">
                                            </div>
                                        </div>
            
                                        <div class="text-center">
                                            <p>すべての入力内容をご確認のうえ、「入力確認画面へ」ボタンを押してください。</p>
                                        </div>
            
                                        <div class="text-center">
                                            <input type="image" src="images/form_confirm_off.jpg" alt="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection